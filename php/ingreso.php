<?php
    include '../php/conectar.php';

        $user=$_POST['user'];
        $pass=$_POST['pass'];

        
        $ingreso=mysqli_query($conectar, "SELECT * FROM usuarios WHERE usuario = '".$user."' and contr = '".$pass."'");
        $nr=mysqli_num_rows($ingreso);
        if($nr == 1){
          header("location: ../pages/administracion.html");
        }else {
            if($nr == 0){
                echo "<script language='javascript'>alert('Usuario o Contraseña Incorrecto'); window.location.href='../pages/ingreso.html'</script>";
                
       
            }
        }


      ?>