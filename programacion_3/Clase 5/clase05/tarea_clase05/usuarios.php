<?php
// *-CREAR PAGINA .PHP QUE RECIBA COMO PARAMETROS (POST)
// *--OPCION, CORREO Y CLAVE
// *---SI OPCION = 'LOGIN' => SE CONECTA CON LA BD Y VERIFICA EXISTENCIA DEL USUARIO.
// *--->>>SI USUARIO NO COINCIDE => INFORMARLO, CASO CONTRARIO MOSTRAR: NOMBRE Y PERFIL (DESCRIPCION)
// *---SI OPCION = 'MOSTRAR' => MOSTRARA EL LISTADO COMPLETO DE LOS USUARIOS
// (ID, CORREO, CLAVE, NOMBRE, PERFIL (CODIGO) Y PERFIL (DESCRIPCION))

$opcion = isset($_POST['opcion']) ? $_POST['opcion'] : NULL;
$correo = isset($_POST['correo']) ? $_POST['correo'] : NULL;
$clave = isset($_POST['clave']) ? $_POST['clave'] : NULL;

if($opcion == "login")
{
    //SE CONECTA CON LA BD Y VERIFICA EXISTENCIA DEL USUARIO
    $host = "localhost";
    $user = "root";
    $pass = "";
    $base = "usuarios_test";

    $conexion = @mysqli_connect($host, $user, $pass, $base);

    if(!$conexion)
    {
        echo "<pre>Error: No se pudo conectar a MySQL.</pre>";
    }
    else
    {
        echo "<pre>Éxito: Se realizó una conexión a MySQL." . PHP_EOL . "</pre>";

        $sql = "SELECT * FROM `usuarios` INNER JOIN perfiles on perfiles.ID = usuarios.PERFIL WHERE `CORREO` LIKE '$correo' AND `CLAVE` LIKE '$clave'";

        $rs = $conexion->query($sql);

        if(mysqli_affected_rows($conexion) != 0)
        {
            while ($row = $rs->fetch_object())
            {
                echo "<pre> Nombre: $row->NOMBRE Descripcion: $row->DESCRIPCION</pre>";
            }               
        }
        else{
            echo "No se hayó el usuario";
        }

      
        mysqli_close($conexion);
    }
}
else if ($opcion == "mostrar")
{

    $host = "localhost";
    $user = "root";
    $pass = "";
    $base = "usuarios_test";

    $conexion = @mysqli_connect($host, $user, $pass, $base);

    if(!$conexion)
    {
        echo "<pre>Error: No se pudo conectar a MySQL.</pre>";
    }
    else
    {
        echo "<pre>Éxito: Se realizó una conexión a MySQL</pre>";

        $sql = "SELECT * FROM `usuarios` INNER JOIN perfiles on perfiles.ID = usuarios.PERFIL";

        $rs = $conexion->query($sql);
        
        while ($row = $rs->fetch_object())
        { 
            //(ID, CORREO, CLAVE, NOMBRE, PERFIL (CODIGO) Y PERFIL (DESCRIPCION))
            echo "<pre>ID: $row->ID Correo: $row->CORREO Clave: $row->CLAVE Nombre: $row->NOMBRE Perfil: $row->PERFIL Descripcion: $row->DESCRIPCION</pre>";
        }       

        mysqli_close($conexion);
    }
}
else{
    echo "Opcion n o disponible";
}


?>