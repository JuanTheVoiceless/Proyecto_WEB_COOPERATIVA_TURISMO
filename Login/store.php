<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Style.css">
</head>
<body>
<?php
    include_once("../connection.php");
    session_start();

    $usuario = $_POST['usuario']; 
    $email = $_POST['email']; 
    $tipo = $_POST['tipo']; 
    $contra = md5($_POST['contra']);

    $sql = "INSERT INTO usuarios(usuario, email, contra, tipo)
    VALUES ('$usuario', '$email', '$contra', '$tipo')";
    if ($conn->query($sql)===True) {
        ?><div class="box"></div>
        <div class="mensaje">
        <?php echo "Su registro ha fallado D:"; ?>
        </div><?php
        return;
    }
    ?>
</body>
</html>