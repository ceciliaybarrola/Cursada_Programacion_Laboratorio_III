<?php

use Usuario as GlobalUsuario;

class Usuario
{
   public $id;
   public $nombre;
   public $correo;
   public $clave;
   public $id_perfil;
   public $perfil;

   public function __construct($id, $nombre, $correo, $clave, $id_perfil, $perfil)
   {
    $this->id= $id;
    $this->nombre= $nombre;
    $this->correo= $correo;
    $this->clave= $clave;
    $this->id_perfil= $id_perfil;
    $this->perfil= $perfil;
        
   }
   public function ToJSON()
   {
       // '{"nombre":"'.$this.nombre.'","correo":"'.$this.correo.'","clave":"'.$this.clave.'"}'
       return json_encode($this);
   }
   public function GuardarEnArchivo()
   {
       try
       {
        $retorno='{"exito":true,"mensaje":"Se escribio el archivo adecuadamente"}';
        $archivo = fopen("../archivos/usuario.json", 'a');
        fwrite($archivo, $this->ToJSON());
        fclose($archivo);           
       }catch(Exception $e){
        $retorno='{"exito":true,"mensaje":"ERROR! '.$e->getMessage().'"}';
       }
       return $retorno;
   }
   public static function TraerTodosLosJSON()
   {
    try
    {
        $retorno='{"exito":true,"mensaje":"Se escribio el archivo adecuadamente"}';
        $archivo = fopen("../archivos/usuario.json", 'r');
        while(!feof($archivo))
        {
            if(!feof($archivo)){
                break;
            }
            $array[] = json_decode(fgets($archivo));
        }

        fclose($archivo);           
    }catch(Exception $e){
        return '{"exito":true,"mensaje":"ERROR! '.$e->getMessage().'"}';
    }
    return $array;
   }
   public function Agregar()
   {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=usuarios_test','root' , '');
        $sentencia = $pdo->prepare('INSERT INTO usuarios (id,nombre, correo, clave , id_perfil) VALUES (:id, :nombre, :correo, :clave, :id_perfil)');
        $sentencia->bindParam(":id", $this->id);
        $sentencia->bindParam(":nombre", $this->nombre);
        $sentencia->bindParam(":correo", $this->correo);
        $sentencia->bindParam(":clave", $this->clave);
        $sentencia->bindParam(":id_perfil", $this->id_perfil);
        $retorno= $sentencia->execute();
    }catch(PDOException $exception){
        $retorno=false;
    }
    return $retorno;
   }
   public static function TraerTodos()
   {
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=usuarios_test','root' , '');
        $sentencia = $pdo->prepare("SELECT usuarios.nombre, usuarios.id, usuarios.correo,usuarios.clave, usuarios.id_perfil, perfiles.descripcion FROM usuarios
                                    INNER JOIN perfiles on perfiles.id = usuarios.id");
        $sentencia->execute();
        $resultado= $sentencia->fetchAll();
        foreach($resultado as $item)
        {
            $array[]= new Usuario($item['usuarios.id'], $item['usuarios.nombre'], $item['usuarios.correo'], $item['usuarios.clave'],$item['usuarios.id_perfil'],$item['perfiles.descripcion']);
        }
    }catch(PDOException $exception){
       // $retorno=false;
    }
    return $array;
   }
   public static function TraerUno($params)
   {
       $json=json_decode($params, true);

    try{
        $pdo = new PDO('mysql:host=localhost;dbname=usuarios_test','root' , '');
        $sentencia = $pdo->prepare("SELECT * FROM usuarios WHERE correo = :correo AND clave=:clave");
        $sentencia->bindParam(':clave', $json['clave']);
        $sentencia->bindParam(':correo', $json['correo']);
        $sentencia->execute();
        $resultado= $sentencia->fetchAll();
        foreach($resultado as $item)
        {
            $array[]= new Usuario($item['id'], $item['nombre'], $item['correo'], $item['clave'],$item['id_perfil'],$item['descripcion']);
        }
    }catch(PDOException $exception){
       // $retorno=false;
    }
   }
}

?>