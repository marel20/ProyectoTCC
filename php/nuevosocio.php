<?php
    //conectar al servidor
   include 'conectar.php';
    //recuperamos las variables del formulario
    
    $numero=$_POST["numero"];
    $nombre=$_POST["nombre"];
    $domicilio=$_POST["domicilio"];
    $localidad=$_POST["localidad"];
    $sexo=$_POST["sexo"];
    $sangre=$_POST["sangre"];
    $dni=$_POST["dni"];
    $nacimiento=$_POST["nacimiento"];
    $ingreso=$_POST["ingreso"];
    $estado=$_POST["estado"];
    $telefono=$_POST["telefono"];
    $cobrador=$_POST["cobrador"];

    $sql="INSERT INTO socios VALUES ('$numero','$nombre','$domicilio','$localidad','$sexo','$sangre','$dni','$nacimiento','$ingreso','$estado','$telefono','$cobrador')";

    //ejecutar la secuencia sql

    $ejecutar=mysqli_query($conectar, $sql);

    //verificamos la ejecucion
    if(!$ejecutar){
        echo '<script language="javascript"> alert ("Ocurrio un error inesperado, intente de nuevo mas tarde"); window.location.href="../pages/contacto.html" </script>';
    }else{
        echo '<script language="javascript"> alert ("Nuevo Socio Cargado."); window.location.href="../pages/nuevosocio.html" </script>';
    }
    
    

?>