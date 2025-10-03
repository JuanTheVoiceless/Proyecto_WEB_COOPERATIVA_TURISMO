<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Style.css">
    <title>Login</title>
</head>
    <body>
        <div class="container">
            <form action="verificacion.php" method="post">
                <h1>Iniciar Sesion</h1>

                <div class="input-box">
                    <input type="text" name="usuario" placeholder="username" required />
                </div>
                

                <div class="input-box">
                    <input type="password" name="contra" placeholder = "password" required />
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox"/>Recuerdame</label>
                    <a href="../Login/Recuperacion.php">¿Olvidaste la Contrseña?</a>
                </div>

                <button type="submit" class="btn">Iniciar sesion</button><br>

                <div class="register-link">
                    <p>Aun no tienes cuenta? <a href="Registrarse.php">👉Registrate aqui👈</a></p>
                </div><br>

                <b><a href="../Inicio/" class="regresar">Regresar al inicio</a></b><br>
            </form>
        </div>
    </body>
</html>