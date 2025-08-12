# Backend - CRUD Laptops

API RESTful desarrollada en **Laravel** (PHP) para la gestión de laptops.

## Tecnologías usadas

- Laravel
- PHP
- PostgreSQL

## Instrucciones para levantar el backend

1. Ir a la carpeta `backend`:
   ```bash
   cd backend
   ```
2. Instalar dependencias:
   ```bash
   composer install
   npm install
   ```
3. Copiar el archivo de entorno:
   ```bash
   cp .env.example .env
   ```
4. Configurar la base de datos:
   - Verifica que `DB_CONNECTION=pgsql` en `.env`.
   - Ajusta los datos de conexión según tu entorno.
5. Ejecutar migraciones y seeders:
   ```bash
   php artisan migrate --seed
   ```
6. Levantar el servidor:
   ```bash
   php artisan serve
   ```
   El backend estará disponible en `http://localhost:8000`

## Buenas prácticas de Git

- Usa ramas para nuevas funcionalidades o correcciones.
- Escribe mensajes de commit claros y descriptivos.
- Utiliza `.gitignore` para evitar subir archivos sensibles o innecesarios.
