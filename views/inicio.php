<!DOCTYPE html>
<html lang="es" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portafolio de Lautaro Agustin Barrera - Desarrollador Web y Especialista en Automatizacion en Cipolletti, Argentina.">
    <title>Lautaro Agustin Barrera | Desarrollador Web & Automatizacion</title>
    <link rel="stylesheet" href="./views/assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./views/assets/images/lautaro.png" type="image/png">
</head>
<body class="m-0 p-0 font-lato bg-bg">
    <div class="bg-bg min-h-screen">
    <section class="grid uppercase text-white sm:grid-cols-[2fr_3fr]">
        <div class="row-start-1 text-center bg-bg sm:col-start-1">
            <h2 class="text-center text-white py-4">Portafolio.</h2>
        </div>
        <div class="fade-in-up col-start-1 row-start-3 sm:translate-x-[130px] sm:-translate-y-[154px] lg:translate-x-[250px] lg:-translate-y-[210px] -translate-y-[110px]">
            <p class="py-2 px-5 w-fit bg-bg m-0 text-xl">Hola, soy</p>
            <h1 class="w-fit py-2 px-5 m-0 text-4xl lg:text-5xl bg-grey">Lautaro Barrera</h1>
            <p class="w-fit m-0 py-2 px-5 text-sm font-semibold text-bg bg-accent">Desarrollador Web & Especialista en Automatizacion</p>
        </div>
        <div class="w-full h-[450px] lg:h-[530px] row-start-2 row-end-4 col-start-1 sm:col-start-2 flex flex-col-reverse bg-cover bg-center bg-grey" style="background-image: url('./views/assets/images/lautaro.png');">
        </div>
        <nav class="h-fit bg-dark-grey/85 backdrop-blur-[10px] col-start-1 row-start-4 w-full sm:h-full sm:col-start-2 sm:row-start-1 sm:flex sm:items-center sm:justify-center">
            <ul class="flex justify-center p-0">
                <li class="mx-3 py-4 list-none font-semibold uppercase"><a href="#proyectos" class="nav-link text-sm text-white no-underline transition-colors duration-300 hover:text-accent">Proyectos</a></li>
                <li class="mx-3 py-4 list-none font-semibold uppercase"><a href="#habilidades" class="nav-link text-sm text-white no-underline transition-colors duration-300 hover:text-accent">Habilidades</a></li>
                <li class="mx-3 py-4 list-none font-semibold uppercase"><a href="#sobre-mi" class="nav-link text-sm text-white no-underline transition-colors duration-300 hover:text-accent">Sobre mi</a></li>
                <li class="mx-3 py-4 list-none font-semibold uppercase"><a href="#contacto" class="nav-link text-sm text-white no-underline transition-colors duration-300 hover:text-accent">Contacto</a></li>
            </ul>
        </nav>
    </section>
    </div>

    <div class="bg-bg" id="proyectos">
    <h2 class="text-3xl text-white py-20 pb-8 max-w-5xl w-[90%] mx-auto text-center md:text-start">Proyectos destacados</h2>
    <section class="w-[90%] mx-auto relative p-5 bg-dark-grey rounded-md overflow-hidden flex justify-center gap-5 flex-wrap border border-accent/15">
        <div class="absolute top-0 left-0">
            <img src="./views/assets/images/esquina.png" alt="" role="presentation">
        </div>
        <div class="absolute right-0 bottom-0 rotate-180">
            <img src="./views/assets/images/esquina.png" alt="" role="presentation">
        </div>
        <div class="proyecto relative z-10 rounded-md overflow-hidden w-full md:max-w-[calc(50%-11px)] lg:max-w-[calc(33%-11px)] 2xl:max-w-[314px] shadow-[0_4px_15px_rgba(0,0,0,0.3)] transition-all duration-300 ease-in-out hover:scale-[1.03] hover:shadow-[0_8px_25px_rgba(0,0,0,0.5)]">
            <img src="./views/assets/images/proyecto1.png" alt="Estudio de Arquitectos" loading="lazy" class="w-full block transition-transform duration-300 ease-in-out">
            <div class="proyecto-overlay">
                <h3 class="my-3.5 text-xl">Estudio de Arquitectos</h3>
                <p class="text-sm text-text-muted mt-1">JavaScript | React.js | HTML | CSS</p>
                <a class="font-bold py-2.5 px-5 inline-block mt-3 uppercase bg-accent rounded-md text-bg text-center text-sm transition-all duration-300 ease-in-out hover:bg-[#e6c200] hover:text-bg hover:scale-105" href="https://lnkd.in/dZp4fYKQ" target="_blank">Ver proyecto</a>
            </div>
        </div>
        <div class="proyecto relative z-10 rounded-md overflow-hidden w-full md:max-w-[calc(50%-11px)] lg:max-w-[calc(33%-11px)] 2xl:max-w-[314px] shadow-[0_4px_15px_rgba(0,0,0,0.3)] transition-all duration-300 ease-in-out hover:scale-[1.03] hover:shadow-[0_8px_25px_rgba(0,0,0,0.5)]">
            <img src="./views/assets/images/proyecto2.png" alt="Proyecto 2" loading="lazy" class="w-full block transition-transform duration-300 ease-in-out">
            <div class="proyecto-overlay">
                <h3 class="my-3.5 text-xl">Proyecto 2</h3>
                <p class="text-sm text-text-muted mt-1">Sitio web responsive</p>
                <a class="font-bold py-2.5 px-5 inline-block mt-3 uppercase bg-accent rounded-md text-bg text-center text-sm transition-all duration-300 ease-in-out hover:bg-[#e6c200] hover:text-bg hover:scale-105" href="#">Ver proyecto</a>
            </div>
        </div>
        <div class="proyecto relative z-10 rounded-md overflow-hidden w-full md:max-w-[calc(50%-11px)] lg:max-w-[calc(33%-11px)] 2xl:max-w-[314px] shadow-[0_4px_15px_rgba(0,0,0,0.3)] transition-all duration-300 ease-in-out hover:scale-[1.03] hover:shadow-[0_8px_25px_rgba(0,0,0,0.5)]">
            <img src="./views/assets/images/proyecto3.png" alt="Proyecto 3" loading="lazy" class="w-full block transition-transform duration-300 ease-in-out">
            <div class="proyecto-overlay">
                <h3 class="my-3.5 text-xl">Proyecto 3</h3>
                <p class="text-sm text-text-muted mt-1">Plataforma interactiva</p>
                <a class="font-bold py-2.5 px-5 inline-block mt-3 uppercase bg-accent rounded-md text-bg text-center text-sm transition-all duration-300 ease-in-out hover:bg-[#e6c200] hover:text-bg hover:scale-105" href="#">Ver proyecto</a>
            </div>
        </div>
    </section>
    </div>

    <div class="bg-bg" id="sobre-mi">
        <section class="pb-20">
            <h2 class="text-3xl text-white py-20 pb-8 max-w-5xl w-[90%] mx-auto text-center md:text-start">Sobre mi</h2>
            <div class="w-[90%] max-w-[700px] mx-auto text-text-muted text-lg lg:text-xl leading-relaxed text-center">
                <p>Durante años, aprendi en el sector logistico y administrativo que un proceso mal diseñado es, en realidad, una oportunidad perdida. Esa misma curiosidad me llevo al mundo del software.</p>
                <p class="mt-4">Hoy, como estudiante de la Tecnicatura en Desarrollo Web, no solo escribo codigo; diseño soluciones que resuelven fricciones operativas. Fusiono la capacidad analitica de la gestion logistica con la innovacion tecnologica para transformar flujos de informacion complejos en herramientas digitales simples y automatizadas.</p>
                <p class="mt-4">Mi objetivo es claro: facilitar la vida de los usuarios y potenciar la productividad de las empresas a traves de tecnologia bien aplicada, estrategica y, sobre todo, funcional.</p>
            </div>
        </section>
    </div>

    <div class="bg-dark-grey" id="habilidades">
        <section class="pb-20">
            <h2 class="text-3xl text-white py-20 pb-8 max-w-5xl w-[90%] mx-auto text-center md:text-start">Habilidades</h2>
            <div class="w-[90%] max-w-[900px] mx-auto grid grid-cols-1 md:grid-cols-3 gap-7">
                <div class="bg-bg rounded-md p-7 border border-accent/15 transition-all duration-300 ease-in-out hover:-translate-y-1.5 hover:shadow-[0_8px_25px_rgba(0,0,0,0.3)]">
                    <h3 class="text-accent text-lg uppercase mb-4 tracking-wide">Frontend</h3>
                    <ul class="list-none flex flex-wrap gap-2.5 p-0">
                        <li class="text-text-muted bg-dark-grey py-1.5 px-3.5 rounded text-sm">JavaScript (ES6+)</li>
                        <li class="text-text-muted bg-dark-grey py-1.5 px-3.5 rounded text-sm">React.js</li>
                        <li class="text-text-muted bg-dark-grey py-1.5 px-3.5 rounded text-sm">HTML5 & CSS3</li>
                        <li class="text-text-muted bg-dark-grey py-1.5 px-3.5 rounded text-sm">Bootstrap</li>
                        <li class="text-text-muted bg-dark-grey py-1.5 px-3.5 rounded text-sm">Diseño responsive</li>
                    </ul>
                </div>
                <div class="bg-bg rounded-md p-7 border border-accent/15 transition-all duration-300 ease-in-out hover:-translate-y-1.5 hover:shadow-[0_8px_25px_rgba(0,0,0,0.3)]">
                    <h3 class="text-accent text-lg uppercase mb-4 tracking-wide">Herramientas</h3>
                    <ul class="list-none flex flex-wrap gap-2.5 p-0">
                        <li class="text-text-muted bg-dark-grey py-1.5 px-3.5 rounded text-sm">Git & GitHub</li>
                        <li class="text-text-muted bg-dark-grey py-1.5 px-3.5 rounded text-sm">NPM</li>
                        <li class="text-text-muted bg-dark-grey py-1.5 px-3.5 rounded text-sm">Terminal & CLI</li>
                        <li class="text-text-muted bg-dark-grey py-1.5 px-3.5 rounded text-sm">V8 & navegadores</li>
                    </ul>
                </div>
                <div class="bg-bg rounded-md p-7 border border-accent/15 transition-all duration-300 ease-in-out hover:-translate-y-1.5 hover:shadow-[0_8px_25px_rgba(0,0,0,0.3)]">
                    <h3 class="text-accent text-lg uppercase mb-4 tracking-wide">Automatizacion & IA</h3>
                    <ul class="list-none flex flex-wrap gap-2.5 p-0">
                        <li class="text-text-muted bg-dark-grey py-1.5 px-3.5 rounded text-sm">n8n</li>
                        <li class="text-text-muted bg-dark-grey py-1.5 px-3.5 rounded text-sm">Prompt Engineering</li>
                        <li class="text-text-muted bg-dark-grey py-1.5 px-3.5 rounded text-sm">ChatGPT</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>

    <div class="bg-dark-grey" id="contacto">
        <section class="pb-20">
            <h2 class="text-3xl text-white py-20 pb-8 max-w-5xl w-[90%] mx-auto text-center md:text-start">Contacto</h2>
            <div class="flex justify-center gap-5 md:gap-7 flex-wrap w-[90%] mx-auto">
                <a href="https://github.com/lautarobarrera10" target="_blank" class="inline-block py-3.5 px-8 border-2 border-accent rounded-md text-accent font-bold uppercase text-sm transition-all duration-300 ease-in-out hover:bg-accent hover:text-bg hover:-translate-y-1 no-underline">GitHub</a>
                <a href="https://www.linkedin.com/in/lautarobarrera" target="_blank" class="inline-block py-3.5 px-8 border-2 border-accent rounded-md text-accent font-bold uppercase text-sm transition-all duration-300 ease-in-out hover:bg-accent hover:text-bg hover:-translate-y-1 no-underline">LinkedIn</a>
                <a href="mailto:contacto@lautarobarrera.com" class="inline-block py-3.5 px-8 border-2 border-accent rounded-md text-accent font-bold uppercase text-sm transition-all duration-300 ease-in-out hover:bg-accent hover:text-bg hover:-translate-y-1 no-underline">Email</a>
            </div>
        </section>
    </div>

    <footer class="bg-footer-bg text-text-muted text-center py-7 px-5 text-sm">
        <p>&copy; 2026 Lautaro Barrera. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
