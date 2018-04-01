<?php
    include ('conecta.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = mysqli_query($conecta, "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'") or die (mysql_error);
            $row = mysqli_num_rows($sql);
            if($row > 0){
                session_start(); 
                $_SESSION['email']=$_POST['email'];
                $_SESSION['senha']=$_POST['senha'];
//                echo "Você foi autenticado com sucesso! aguardo um instante.";
                echo "<script> window.location='../site/site.php';</script>";                
            }
            else{
                echo '<script>alert("Usuario ou senha incorreta");</script>';
                echo '<script> window.setTimeout(window.location.href = "../login.php",5000)</script>';
            }


?>