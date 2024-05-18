### Funcionalidades Principales

- **CRUD de Videojuegos**: Permite crear, leer, actualizar y eliminar registros de videojuegos.
- **Autenticación de Usuarios**: Los usuarios pueden registrarse, iniciar sesión y gestionar sus videojuegos.
- **Diseño Responsivo**: Utiliza Tailwind CSS para un diseño responsivo y atractivo.
- **Autorización**: Implementación de políticas de autorización para asegurar que solo los usuarios autorizados puedan editar o eliminar sus videojuegos.
- **Subida de Imágenes**: Soporte para la subida y visualización de imágenes de los videojuegos.

## Tecnologías Utilizadas

- **Framework**: Laravel
- **Base de Datos**: MySQL
- **Diseño**: Tailwind CSS, DaisyUI
- **Autenticación**: Laravel Breeze
- **Control de Versiones**: Git
- **Notificaciones**: SweetAlert2
- **Íconos**: Heroicons

## Características Implementadas

### Instalación y Configuración

- **Inicialización del Proyecto**: Instalación de Laravel y configuración del proyecto con Tailwind CSS y DaisyUI para el diseño de la interfaz.
- **Control de Versiones**: Configuración inicial de Git y commits recurrentes para registrar el progreso del proyecto.

### Gestión de Base de Datos

- **Configuración de la Base de Datos**: Conexión a MySQL y creación de migraciones y modelos para las tablas de usuarios y videojuegos.
- **Migraciones**: Creación de la tabla `videojuegos` con campos para almacenar la información básica de cada videojuego, así como la referencia al usuario que lo registró.

### Autenticación y Registro

- **Sistema de Autenticación**: Configuración de Laravel Breeze para el manejo de registro e inicio de sesión de usuarios.
- **Validaciones**: Implementación de validaciones para los campos del formulario de registro, asegurando que los datos ingresados sean correctos.
- **Opción "Remember Me"**: Inclusión de la funcionalidad "Remember Me" en el formulario de login.

### Desarrollo de Interfaz de Usuario

- **Layouts y Vistas**: Desarrollo de las vistas y layouts necesarios para la aplicación, incluyendo la vista de inicio, el formulario de login y las vistas para gestionar los videojuegos.
- **Estilización**: Utilización de Tailwind CSS y DaisyUI para estilizar las páginas y mantener un diseño limpio y responsivo.

### CRUD de Videojuegos

- **Controlador CRUD**: Creación del controlador para gestionar las operaciones CRUD de los videojuegos.
- **Subida de Imágenes**: Implementación de la funcionalidad de subida y visualización de imágenes para cada videojuego.
- **Notificaciones**: Integración de SweetAlert2 para mostrar notificaciones y alertas amigables.

### Relaciones y Traducciones

- **Relaciones de Base de Datos**: Definición de relaciones entre los usuarios y los videojuegos (1:N).
- **Traducciones**: Adición de traducciones a inglés y español utilizando el sistema de localización de Laravel.

### Seguridad y Autorización

- **Protección de Rutas**: Configuración de rutas protegidas por middleware para asegurar que solo los usuarios autenticados puedan acceder a ciertas funcionalidades.
- **Políticas de Autorización**: Implementación de políticas de autorización para permitir solo a los usuarios autorizados editar o eliminar sus videojuegos.

### Datos de Prueba

- **Factories y Seeders**: Creación de factories y seeders para poblar la base de datos con datos de prueba.
- **Roles de Usuario**: Implementación de roles de usuario para manejar diferentes niveles de acceso en la aplicación.

## Cómo Realicé el Proyecto
Para comenzar con este proyecto, seguí una estructura de desarrollo organizada en pasos claros y definidos. Primero, instalé y configuré Laravel, junto con Tailwind CSS y DaisyUI, para asegurar un diseño consistente y responsivo en todas las vistas. Utilicé Git para el control de versiones, realizando commits frecuentes para documentar el progreso.

La configuración de la base de datos fue uno de los primeros pasos, definiendo las migraciones y modelos necesarios para los usuarios y videojuegos. Implementé un sistema de autenticación utilizando Laravel Breeze, con validaciones personalizadas para asegurar que los datos de los usuarios fueran correctos.

Desarrollé las vistas y layouts necesarios para la aplicación, utilizando Tailwind CSS para estilizar las páginas. Implementé las funcionalidades CRUD para gestionar los videojuegos, incluyendo la opción de subir y visualizar imágenes.

Para asegurar la correcta relación entre los datos, definí las relaciones entre usuarios y videojuegos y añadí traducciones en inglés y español. Configuré rutas protegidas y políticas de autorización para asegurar que solo los usuarios autorizados pudieran editar o eliminar sus videojuegos.

Finalmente, creé factories y seeders para poblar la base de datos con datos de prueba, e implementé roles de usuario para manejar diferentes niveles de acceso. Todo este proceso me permitió aprender y practicar con Laravel y Tailwind CSS, construyendo una aplicación funcional desde cero.


# Cómo Realicé el Proyecto

Para comenzar con este proyecto, seguí una estructura de desarrollo organizada en pasos claros y definidos.

## Inicialización del Proyecto

Instalé Laravel y configuré Tailwind CSS y DaisyUI:

```sh
composer create-project --prefer-dist laravel/laravel videojuegos-app
cd videojuegos-app
npm install -D tailwindcss
npx tailwindcss init
npm install daisyui
```
Configuración de la Base de Datos
Configuré la conexión a MySQL en el archivo .env y creé las migraciones necesarias:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=videojuegos_db
DB_USERNAME=mario
DB_PASSWORD=mario12345
APP_DEBUG=true
APP_KEY=base64:PC74VyynVQ5VlINmyEBzG9h4aJgDx4XPITbZQ3aE6Sk=
APP_URL=http://localhost
```

## Implementación de Autenticación
Usé Laravel Breeze para manejar el registro e inicio de sesión de usuarios:
```sh
composer require laravel/breeze --dev
php artisan breeze:install
npm install
npm run dev
php artisan migrate
```
## Implementación de CRUD de Videojuegos
Creé el controlador CRUD para los videojuegos y manejé la subida de imágenes:

```php
public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        'descripcion' => 'required',
        'genero' => 'required',
        'plataforma' => 'required',
        'imagen' => 'nullable|image',
    ]);

    $data = $request->only('nombre', 'descripcion', 'genero', 'plataforma');
    $data['user_id'] = Auth::id();

    if ($request->hasFile('imagen')) {
        $data['imagen'] = $request->file('imagen')->store('public/imagenes');
    }

    Videojuego::create($data);

    return redirect()->route('videojuegos.index')->with('success', 'Videojuego creado correctamente.');
}
```

## Relaciones y Traducciones
Definí las relaciones en los modelos y añadí soporte para múltiples idiomas:

```php
// User.php
public function videojuegos()
{
    return $this->hasMany(Videojuego::class);
}

// Videojuego.php
public function user()
{
    return $this->belongsTo(User::class);
}
```

## Seguridad y Autorización
Configuré rutas protegidas y políticas de autorización:

```php
Route::middleware(['auth'])->group(function () {
    Route::resource('videojuegos', VideojuegoController::class);
});
```
