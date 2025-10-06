<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../IMG/Icon.png">
  <link rel="stylesheet" href="../CSS/Style_header.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
<?php
  session_start();
?>
<header>
        <a href="../Inicio/" class="logo">
          <nav class="Logo">
            <span><img class="Logo" src="../IMG/Image.png" alt="Logo"></span>
          </nav>
        </a>


          <input type="checkbox" id="barra_menu">
          <label for="barra_menu" class="fa fa-bars"></label>


            <!-- redireccionar corretamente -->
        <nav class ="navbar">
            <a href="#inicio">Inicio</a>
            <a href="#detalles">Reservas</a>
            <a href="#acerca_de">Rutas</a>
            <a href="../Quienes_Somos/">Sobre Nosotros</a>
            <a href="#acerca_de">Equipo</a>
            <!-- <a href="../publicaciones/"></a>
            <a href="#contactanos"></a> -->


            <!-- usuarios autenticados -->
             <?php if(isset($_SESSION['tipo'])): ?>
             
            
                <?php if($_SESSION['tipo']=='ADMINISTRADOR'):?>
                  <!-- perfil admin -->
                  <a href="../publicaciones/">Gestión de Reservas</a>
                  <a href="../historial.php/">Gestion del Personal</a>
                <?php endif ?>

                <a href="../Login/logout.php" class="right">Cerrar sesión</a>
                <?php
                    else:
                ?>
                  <a href="../Login/Registrarse.php">Registrarse</a>
                  <a href="../Login/Login.php">Ingresar</a>
            <?php endif?>
        </nav> 
    </header>
</body>
</html>