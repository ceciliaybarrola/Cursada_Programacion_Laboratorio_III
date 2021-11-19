<?php

class Producto
{
    public $nombre;
    public $origen;

public function __construct($nombre, $origen)
{
    $this->nombre= $nombre;
    $this->origen= $origen;
}
public function ToJSON()
{
    return '{"nombre:"'. $this->nombre. ',"origen":'.$this->origen.'}';
}
public function GuardarJSON($path)
{
    $archivo = fopen($path, "a");
    if(!fwrite($archivo, $this->ToJSON()))
    {
        $retorno= '{"exito":false,"mensaje":"error al escribir o abrir el archivo"}';
    }
    else{
        $retorno= '{"exito":true,"mensaje":"exito al escribir el archivo"}';
    }
    fclose($archivo);

    return $retorno;
}
public static function TraerJSON()
{
    $array = array();
    $archivo = fopen("./archivos/productos.json", "r");
    while(!feof($archivo))
    {
        if(feof($archivo))
        continue;

        $cadena = trim(fgets($archivo));
        $producto = json_decode($cadena);
        array_push($array, new Producto($producto->nombre,$producto->nombre));

        return $array;
    }
}
public static function VerificarProductoJSON($producto)
{
    $array = Producto::TraerJSON();
    $contadorDeOrigen=0;
    $existe=false;
    $arrayProductoMasPopular= array();

    foreach($array as $item)
    {
        if(!isset($arrayProductoMasPopular[$item->nombre]))
        {
            $arrayProductoMasPopular[$item->nombre]=1;
        }
        else
        {
            $arrayProductoMasPopular[$item->origen]++;
        }
        if($item->origen == $producto->origen)
        {
            $contadorDeOrigen++;  

            if($item->nombre == $producto->nombre)
            {
                $existe = true;
            }                  
        }

    }
    if($existe)
    {
        $retornoJSON = '{"existe":true,"mensaje":"Existe el producto y hay registrados '.$contadorDeOrigen.' de ese origen"}';
    }
    else
    {
        $aux=0;
        foreach($arrayProductoMasPopular as $keyNombre => $valorCantidad)
        {
            if($aux<$valorCantidad)
            {
                $aux = $valorCantidad;
                $retornoJSON = '{"existe":false,"mensaje":"No existe el producto. El producto mas popular es'.$keyNombre.' con la cantidad de '.$valorCantidad.' "}';                
            }
        }
    }
    return $retornoJSON;
}


}
?>