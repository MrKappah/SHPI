<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
include 'c_usuarios.php';
?>

<table border="1">
    <tr>
        <td>id</td> <td>nome</td>
    </tr>

    <?php

    $msg= new controller_publicacao();
  $sk= $msg->buscar();
    foreach ($sk as $linha):


    ?>

    <tr>
        <td> <?= $linha['idUser'] ?> </td>
        <td> <?= $linha['nome'] ?></td>
    </tr>

    <?php endforeach ?>
</table>
</body>
</html>