# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Personal portfolio website for Lautaro Barrera (lautarobarrera.com). Pure PHP with no external dependencies or build tools. Deployed via GitHub Pages/Apache.

## Development

```bash
# Run local dev server
php -S localhost:8000
```

Requires PHP 5.3+ and Apache with `mod_rewrite` for production.

No test framework, linter, or package manager is configured.

## Architecture

Custom lightweight MVC router pattern across 4 PHP files (~119 lines total):

- **`index.php`** — Entry point. Creates `Router` instance and maps URI patterns to closures or controller actions.
- **`utils/Router.php`** — Custom router class. Registers routes via `add(uri, action)`, dispatches via `run()`. Actions can be closures or `ClassName@methodName` strings. Routes are matched with regex against `$_GET['uri']` (set by `.htaccess` rewrite).
- **`controllers/HomeController.php`** — Controller with `showHome()` and `showAbout()` methods (currently placeholder stubs).
- **`views/inicio.php`** — Main HTML template with portfolio cover, navigation, and project showcase.

**Request flow:** Apache `.htaccess` rewrites all requests to `index.php?uri=<path>` → Router matches URI → executes closure (which includes a view) or calls a controller method.

## Conventions

- Spanish used for commit messages, view filenames, CSS classes, and UI text
- CSS is mobile-first with breakpoints at 600px, 768px, 1024px, 1440px
- Assets live under `views/assets/` (css, images)
- Git submodule `proyectos` points to the `calculadora-imc` repository
