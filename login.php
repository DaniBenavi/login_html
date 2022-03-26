<?php
include('config.php');
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['usuario'];
    $password = $_POST['password'];

    $query = $conn->prepare("SELECT * FROM usuarios WHERE username = :username and password=:password");
    $query->bindParam("username", $username,  PDO::PARAM_STR);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
        echo '¡La combinación de nombre de usuario y contraseña es incorrecta!';
    } else {
        if ($password = $result['password'] && $username = $result['username']) {
            echo '¡Felicitaciones, estás registrado!';
            echo $username . " ";
            echo $password;
        } else {
            echo '¡La combinación de nombre de usuario y contraseña es incorrecta!';
        }
    }
} else {
    echo 'rellene los campos';
}
