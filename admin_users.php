<?php
include('config.php');

session_start();
require_once('class/usuarios.php');
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}
$objusuarios = new Usuarios();
$usuarios = $objusuarios->MostrarUsuarios();

?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php require_once "menu.php" ?>
    <title>Lista de usuarios</title>
</head>

<body>

    <div class="container"><br>

        <?php
        if (sizeof($usuarios) > 0) {
            # code...
        }

        ?>
        <table class="table table-success table-striped" cellspacing="0" width="100%" id="usuarios">

            <tr>
                <th>Usuario</th>
                <th>Contraseña</th>
                <th>Email</th>
                <th>Estado</th>
            </tr>
            <tbody>
                <?php
                foreach ($usuarios as $row) {

                ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['username'] ?></td>
                        <td><?php echo $row['password'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['estado'] ?></td>

                    </tr>
                <?php
                }

                ?>
            </tbody>
        </table>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>