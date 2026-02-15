# Lautaro Barrera - Portafolio

Sitio web personal de portafolio construido con PHP puro y CSS responsive.

## Requisitos

- PHP 5.3 o superior
- Apache con `mod_rewrite` habilitado (para produccion)

## Desarrollo local

```bash
php -S localhost:8000
```

Luego abrir http://localhost:8000 en el navegador.

## Estructura del proyecto

```
├── index.php                 # Punto de entrada y definicion de rutas
├── .htaccess                 # Reescritura de URLs para Apache
├── utils/
│   └── Router.php            # Enrutador personalizado
├── controllers/
│   └── HomeController.php    # Controlador principal
└── views/
    ├── inicio.php            # Plantilla principal del portafolio
    └── assets/
        ├── css/              # Estilos responsive (mobile-first)
        └── images/           # Imagenes del sitio
```

## Tecnologias

- **Backend:** PHP (enrutador MVC personalizado)
- **Frontend:** HTML5 + CSS3 (sin frameworks)
- **Tipografia:** Google Fonts (Lato)
