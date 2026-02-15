<!DOCTYPE html>
<html lang="es" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lautaro Barrera</title>
    <link rel="stylesheet" href="./views/assets/css/mobile.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./views/assets/images/lautaro.png" type="image/png">
</head>
<body>
    <div class="portada-container">
    <section class="portada">
        <div class="portafolio">
            <h2>Portafolio.</h2>
        </div>
        <div class="presentacion fade-in-up">
            <p class="hola-soy">Hola, soy</p>
            <h1>Lautaro Barrera</h1>
            <p class="resaltado">Desarrollador web</p>
        </div>
        <div class="photo-container">
        </div>
        <nav class="nav">
            <ul>
                <li><a href="#proyectos">Proyectos</a></li>
                <li><a href="#sobre-mi">Sobre mi</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </section>
    </div>

    <div class="proyectos-section-container" id="proyectos">
    <h2 class="title-section">Proyectos destacados</h2>
    <section class="proyectos">
        <div class="esquina izq">
            <img src="./views/assets/images/esquina.png" alt="">
        </div>
        <div class="esquina der">
            <img src="./views/assets/images/esquina.png" alt="">
        </div>
        <div class="proyecto">
            <img src="./views/assets/images/proyecto1.png" alt="Proyecto 1">
            <div class="proyecto-overlay">
                <h3>Proyecto 1</h3>
                <p>Aplicacion web moderna</p>
                <a class="button" href="#">Ver proyecto</a>
            </div>
        </div>
        <div class="proyecto">
            <img src="./views/assets/images/proyecto2.png" alt="Proyecto 2">
            <div class="proyecto-overlay">
                <h3>Proyecto 2</h3>
                <p>Sitio web responsive</p>
                <a class="button" href="#">Ver proyecto</a>
            </div>
        </div>
        <div class="proyecto">
            <img src="./views/assets/images/proyecto3.png" alt="Proyecto 3">
            <div class="proyecto-overlay">
                <h3>Proyecto 3</h3>
                <p>Plataforma interactiva</p>
                <a class="button" href="#">Ver proyecto</a>
            </div>
        </div>
    </section>
    </div>

    <div class="sobre-mi-container" id="sobre-mi">
        <section class="sobre-mi">
            <h2 class="title-section">Sobre mi</h2>
            <div class="sobre-mi-content">
                <p>Soy un desarrollador web apasionado por crear experiencias digitales modernas y funcionales. Me especializo en el desarrollo frontend y backend, buscando siempre soluciones creativas y eficientes.</p>
            </div>
        </section>
    </div>

    <div class="contacto-container" id="contacto">
        <section class="contacto">
            <h2 class="title-section">Contacto</h2>
            <div class="contacto-links">
                <a href="https://github.com/lautarobarrera10" target="_blank" class="contacto-link">GitHub</a>
                <a href="https://linkedin.com" target="_blank" class="contacto-link">LinkedIn</a>
                <a href="mailto:contacto@lautarobarrera.com" class="contacto-link">Email</a>
            </div>
        </section>
    </div>

    <footer class="footer">
        <p>&copy; 2026 Lautaro Barrera. Todos los derechos reservados.</p>
    </footer>
</body>
</html>