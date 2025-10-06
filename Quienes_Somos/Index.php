<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros | Corazón Verde Caldense</title>
    <link rel="stylesheet" href="../CSS/style_Quienes_Somos.css">
</head>
<body>
    <?php
       Include_Once ("../partials/header.php");
    ?>

    <section class="hero">
        <div class="hero-content">
            <h1>Corazón Verde Caldense</h1>
            <p>Comprometidos con el bienestar ambiental y social de nuestra comunidad.</p>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <h2>Quiénes Somos</h2>
            <div class="about-content">
                <img src="https://placehold.co/500x300/6dbf73/fff?text=Nuestro+Equipo" alt="Equipo Corazón Verde">
                <p>
                    Somos una organización comprometida con el cuidado del medio ambiente y el fortalecimiento de la conciencia ecológica en Caldas. 
                    Promovemos acciones sostenibles, educación ambiental y proyectos comunitarios que buscan mejorar la calidad de vida de las personas y proteger nuestros recursos naturales.
                </p>
            </div>
        </div>
    </section>

    <section class="mission">
        <div class="container">
            <h2>Misión</h2>
            <p>
                Fomentar la cultura ambiental a través de la educación, el voluntariado y la acción social, impulsando el amor y respeto por la naturaleza en cada rincón del departamento de Caldas.
            </p>
        </div>
    </section>

    <section class="vision">
        <div class="container">
            <h2>Visión</h2>
            <p>
                Ser reconocidos como una organización líder en la transformación ambiental del territorio caldense, inspirando a las futuras generaciones a actuar por un mundo más verde y sostenible.
            </p>
        </div>
    </section>

    <section class="values">
        <div class="container">
            <h2>Valores</h2>
            <div class="values-grid">
                <div class="value-card">
                    <img src="https://placehold.co/200x150/80c47f/fff?text=Respeto" alt="Respeto">
                    <h3>Respeto</h3>
                    <p>Por la vida, las personas y el entorno natural que compartimos.</p>
                </div>
                <div class="value-card">
                    <img src="https://placehold.co/200x150/8fd98c/fff?text=Solidaridad" alt="Solidaridad">
                    <h3>Solidaridad</h3>
                    <p>Unimos esfuerzos y corazones para lograr un cambio positivo.</p>
                </div>
                <div class="value-card">
                    <img src="https://placehold.co/200x150/9ce5a0/fff?text=Compromiso" alt="Compromiso">
                    <h3>Compromiso</h3>
                    <p>Trabajamos día a día por un futuro sostenible y justo.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <h2>Contáctanos</h2>
            <p>Si deseas unirte a nuestras iniciativas o conocernos más, déjanos tu mensaje.</p>
            <form action="#" method="post">
                <input type="text" name="nombre" placeholder="Tu nombre" required>
                <input type="email" name="correo" placeholder="Tu correo electrónico" required>
                <textarea name="mensaje" placeholder="Escribe tu mensaje..." required></textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2025 Corazón Verde Caldense | Todos los derechos reservados</p>
    </footer>

</body>
</html>