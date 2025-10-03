<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Style_veri.css">
    <link rel="icon" href="../IMG/Icon.png">
    <title>verificacion</title>
</head>
<body>
    <?php
    include_once("../connection.php");
    session_start();
    $usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $contra = md5($_POST['contra']);

    $sql = "SELECT * FROM usuarios WHERE usuario = ? AND contra = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $usuario, $contra);

    if ($stmt->execute()) {
        $resultado = $stmt->get_result();
        $user=$resultado->fetch_assoc();
        if ($resultado->num_rows > 0) {
            $_SESSION['id']=$user['id'];
            $_SESSION['usuario']=$user['usuario'];
            $_SESSION['tipo']=$user['tipo'];
            $_SESSION['id'] = $user['id'];
            
            header('Location: ../inicio/');


        } else {
            ?>
            <div class="incorrect">
                <h1>Nombre de usuario o contraseña incorrectos</h1>
            </div>
            <div class="back"></div>   
                <h1 class="text_back"><a href="Login.php">Regresar</a></h1>
            
            <?php
        }
    } else {
        $error = $conn->error;
        echo "Error: $error";
    }
    ?>
</body>
</html>