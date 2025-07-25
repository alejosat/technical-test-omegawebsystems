# Proyecto Laravel - Gestión de Perfiles

Este proyecto es una aplicación web construida con Laravel que permite importar, listar y editar perfiles de usuario obtenidos desde una API externa.

## Características

- **Importación de Perfiles:** Permite importar perfiles desde una API externa y almacenarlos en la base de datos.
- **Listado de Perfiles:** Muestra una tabla con los perfiles importados, incluyendo nombre, avatar y país.
- **Edición de Perfiles:** Permite editar los datos de un perfil existente.
- **Persistencia en Base de Datos:** Utiliza migraciones y modelos Eloquent para la gestión de datos.
- **Interfaz con Bootstrap:** La interfaz utiliza Bootstrap para el diseño responsivo.

## Estructura Principal de Archivos

- `app/Http/Controllers/ProfileController.php`: Controlador principal para la gestión de perfiles.
- `app/Models/Profile.php`: Modelo Eloquent para la tabla `profiles`.
- `app/Service/ServiceApi.php`: Servicio encargado de consumir la API externa.
- `database/migrations/2025_07_25_205034_create_profiles_table.php`: Migración para la tabla de perfiles.
- `resources/views/welcome.blade.php`: Vista principal con el listado de perfiles.
- `resources/views/profile.blade.php`: Vista para editar un perfil.
- `routes/web.php`: Definición de rutas web para la aplicación.
- `.env`: Configuración de entorno, incluyendo la URL de la API externa.

## Instalación

1. **Clona el repositorio y entra al directorio:**
   ```sh
   git clone <url-del-repo>
   cd <nombre-del-proyecto>
   ```

2. **Instala las dependencias de PHP y JavaScript:**
   ```sh
   composer install
   npm install
   ```

3. **Configura el archivo de entorno:**
   Copia `.env.example` a `.env` y ajusta las variables necesarias (base de datos, API_URL, etc).

4. **Genera la clave de la aplicación:**
   ```sh
   php artisan key:generate
   ```

5. **Ejecuta las migraciones:**
   ```sh
   php artisan migrate
   ```

6. **Inicia el servidor de desarrollo:**
   ```sh
   php artisan serve
   ```

7. **Compila los assets:**
   ```sh
   npm run dev
   ```

## Uso

- Accede a la ruta principal (`/`) para ver el listado de perfiles.
- Usa el botón "Guardar Perfiles" para importar datos desde la API.
- Haz clic en "Editar" para modificar un perfil existente.

## Configuración de la API

La URL de la API externa se define en el archivo `.env` con la variable `API_URL`.

## Licencia

Este proyecto está bajo la licencia MIT.

---

**Archivos principales:**
- [app/Http/Controllers/ProfileController.php](app/Http/Controllers/ProfileController.php)
- [app/Models/Profile.php](app/Models/Profile.php)
- [app/Service/ServiceApi.php](app/Service/ServiceApi.php)
- [database/migrations/2025_07_25_205034_create_profiles_table.php](database/migrations/2025_07_25_205034_create_profiles_table.php)
- [resources/views/welcome.blade.php](resources/views/welcome.blade.php)
- [resources/views/profile.blade.php](resources/views/profile.blade.php)
- [routes/web.php](routes/web.php)
