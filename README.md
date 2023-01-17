# Test Hotelinking
## Requisitos
- **[XAMPP](https://www.apachefriends.org/es/download.html) o aplicaciones parecidas instalado y funcional.**
- **[Composer](https://getcomposer.org/download/) instalado y actualizado.**

## Instrucciones de funcionamiento
1. **Descargar** el **proyecto** desde el repositorio de **Github**.
2. Mover el proyecto a la carpeta **\htdocs** de nuestro XAMPP.
3. Cambiar el nombre al archivo **.env.example** por **.env**, editarlo para introducir los datos de la base de datos:
    1. Nombre de la base de datos (DB_DATABASE)
    2. Nombre de usuario (DB_USERNAME)
    3. Contraseña (DB_PASSWORD)
4. Acceder con la **terminal** a la carpeta del **proyecto**.
5. Hacer uso de los siguientes **comandos** para:
    1. Actualizar el Vendor
    2. Generar la clave de laravel en el archivo .env
    3. Crear las tablas de la base de datos y introducirles unos valores por defecto 
        1. Los guiones se tienen que volver a escribir en la terminal porque no se copian bien
    4. Instalar y ejecutar NPM

```
composer update
```
```
php artisan key:generate
```
```
php artisan migrate:fresh --seed
```
```
npm install
```
```
npm run dev
```

## Usuario por defecto
Se crea a través del uso de seeders un usuario por defecto con los siguientes datos:
* **Nombre** = Admin
* **Email** = admin@gmail.com
* **Contraseña** = password
