# Test Hotelinking
## Requisitos
- **XAMPP o aplicaciones parecidas instalado y funcional.**

## Instrucciones de funcionamiento
1. **Descargar** el **proyecto** desde el repositorio de **Github**.
2. Mover el proyecto a la carpeta **\htdocs** de nuestro XAMPP.
3. Cambiar el nombre al archivo **.env.example** por **.env**, editarlo para introducir los datos de la base de datos:
    1. Nombre de la base de datos (DB_DATABASE)
    2. Nombre de usuario (DB_USERNAME)
    3. Contraseña (DB_PASSWORD)
4. Acceder con la **terminal** a la carpeta del **proyecto**.
5. Hacer uso del siguiente **comando** para crear las tablas de la base de datos y introducirles unos valores por defecto.

```
php artisan migrate:fresh –-seed
```

## Usuario por defecto
Se crea a través del uso de seeders un usuario por defecto con los siguientes datos:
* **Nombre** = Admin
* **Email** = admin@gmail.com
* **Contraseña** = password
