<?php
    //conectar al servidor
    $conectar=@mysqli_connect('localhost','root','','tenis');
    //verificamos si conecta
    if(!$conectar){
        echo"No se conecto";
    }

    

?>