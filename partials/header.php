<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../CSS/Style_inicio.css">
  <title>Document</title>
</head>
<body>
<?php
  session_start();
?>
<header>
        <a href="#" class="logo">
            <span><img class="IMG_Logo" src="../IMG/Logo_Login2.png" alt="Logo"></span></a>

            <input type="checkbox" id="barra_menu">
            <label for="barra_menu" class="fa fa-bars"></label>

        <nav class ="navbar">
            <a href="#inicio">Inicio 👾</a>
            <a href="#detalles">Detalles 🧐</a>
            <a href="#acerca_de">Acerca de 🤯</a>
            <a href="../publicaciones/">publicacion</a>
            <a href="#contactanos">Contactanos 🥸</a>
            <!-- usuarios autenticados -->
             <?php if(isset($_SESSION['tipo'])): ?>
             
            
                <?php if($_SESSION['tipo']=='ADMINISTRADOR'):?>
                  <a href="../publicaciones/">Gestión de publicaciones 🥸</a>
                  <a href="../historial.php/">Historial de uso 🥸</a>
                <?php endif ?>

                <a href="../Login/logout.php" class="right">Cerrar sesión 🥸</a>
                <?php
                    else:
                ?>
                  <a href="../Login/Registrarse.php">Registrarse 🥸</a>
                  <a href="../Login/Login.php">Ingresar 🥸</a>
            <?php endif?>
        </nav> 
    </header>
</body>
</html>