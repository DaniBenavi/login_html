<?php
include('config.php');
session_start();



$usuario = $_POST['usuario'];
$password = $_POST['password'];

$query = $conn ->prepare("select * from usuarios where username=:usuario ");
$query ->bindParam("username", $usuario, PDO::PARAM_STR);

$query -> execute();

$resultado=$query->fetch(PDO::FETCH_ASSOC);

    if (!$resultado) {
        echo'usuario o password incorrectos';
    } else {
        if (password_verify($password,$resultado['password'])) {
            echo 'Felicitaciones bienvenido!';
        }
        else{
            echo 'Error al iniciar';
        }
       
    }
