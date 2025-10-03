<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Style.css">
    <link rel="icon" href="../IMG/Icon.png">
    <title>Registrarse</title>
</head>
<body>
<?php
$contra = $contra2 = "";
$contra_error = "";
$is_error = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email']; 
    $usuario = $_POST['usuario']; 
    $contra = $_POST['contra'];
    $contra2 = $_POST['contra2'];

    if ($contra == "") {
        $contra_error = "El campo contraseña es requerido 😁";
        $is_error = true;
    } else if ($contra != $contra2) {
        $contra_error = "Las contraseñas no son iguales";
        $is_error = true;
    }

    if (!$is_error) {
        include_once("../Login/store.php");
        header("Location: ../Login/Login.php"); 
        exit;
    }
}
?>
<div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <input type="hidden" name="tipo" value="CLIENTE">
        <h1>Regístrate</h1>

        <div class="input-box">
            <input type="email" name="email" placeholder="email" required />
        </div>

        <div class="input-box">
            <input type="text" name="usuario" placeholder="usuario" required />
        </div>

        <div class="input-box">
            <input type="password" name="contra" placeholder="password" required />
        </div>

        <div class="input-box">
            <small><?php echo $contra_error ?></small>
            <input type="password" name="contra2" placeholder="confirmar password" required />
        </div>
        <br>
        <div class="remember-forgot">
            <label><input type="checkbox"/>Recuerdame</label>
        </div>

        <button type="submit" class="btn">Continuar</button>

        <div class="register-link">
            <p>¿Ya tienes una cuenta? <a href="../Login/Login.php">Inicia sesión</a></p>
        </div><br> 

        <p><a href="../Inicio/" class="regresar">Regresar al inicio</a></p>
    </form>
</div>
</body>
</html>