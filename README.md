# Laravel Tailwind Starter

Proyecto base construido con **Laravel** y **Tailwind CSS**, listo para comenzar el desarrollo de aplicaciones web modernas utilizando **Vite** como herramienta de compilación de assets.

---

## 🚀 Descripción

Este repositorio proporciona una plantilla inicial de Laravel con Tailwind CSS ya configurado.  
Está pensado para servir como punto de partida rápido para nuevos proyectos.

Incluye:
- Laravel v12
- Tailwind CSS
- Vite para assets
- Configuración lista para desarrollo y producción

---

## 📦 Requisitos

Antes de comenzar asegúrate de tener instalado:

- PHP > 8
- Composer
- Node.js y npm
- Git

---

## 🛠️ Instalación

1. Clonar el repositorio

```bash
git clone https://github.com/UrbinaBenavides/laravel-tailwind.git
cd laravel-tailwind
```

2. Instalar dependencias PHP

```bash
composer install
```

3. Instalar dependencias frontend

```bash
npm install
```

4. Crear archivo de entorno

```bash
cp .env.example .env
```

5. Generar clave de la aplicación

```bash
php artisan key:generate
```

---

## 🎨 Tailwind CSS y Vite

El proyecto ya viene configurado con Tailwind y Vite.

### Desarrollo

```bash
npm run dev
```

### Producción

```bash
npm run build
```

---

## ▶️ Ejecutar el proyecto

Inicia el servidor de Laravel:

```bash
php artisan serve
```

Accede desde el navegador:

```
http://localhost:8000
```

---

## 📂 Estructura del proyecto

```
├── app/                 # Lógica de la aplicación
├── bootstrap/
├── config/
├── database/
├── public/              # Archivos públicos
├── resources/           # Vistas y assets
├── routes/              # Rutas web y API
├── storage/
├── tests/
├── tailwind.config.js   # Configuración Tailwind
├── vite.config.js       # Configuración Vite
├── composer.json
└── package.json
```

---

## ✨ Autor

Repositorio base para proyectos Laravel con Tailwind CSS.