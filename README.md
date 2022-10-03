<img src="public/logoBlue.svg" style="margin-left: 30px;">


## Descripción
Fabulous Photo es una app creada con PHP Laravel + Blade para gestionar imágenes con las siguientes opciones: editar, eliminar, añadir a lista de favoritos y eliminar de la lista. La gestión de esta app está limitada en función del rol del usuario. Si el usuario se loguea como usuario común o crea su propio usuario podrá añadir las imágenes que quiera a la lista de favoritos, ver las que tiene en la lista y eliminar las que ya no desee tener en favoritos. Estas funciones también las tiene el usuario administrador. Como usuario administrador también podrá añadir imágenes nuevas, así como editar y eliminar las imágenes existentes. 
La aplicación es responsive, como se puede ver también en las previsualizaciones.
Proyecto enteramente desaroollado en inglés, código y commits, a excepción del contenido visible en la aplicación, en castellano.

## Requisitos funcionales
<ul>
<li>Como usuario será necesario poder ver una lista de mis imágenes (imagen y un título).</li>
<li>Como usuario será necesario poder añadir imágenes a una base de datos (con URL).</li>
<li>Como usuario será necesario poder eliminar una imagen.</li>
<li>Como usuario será necesario poder editar una imagen.</li>
</ul>

## Requisitos técnicos
<ul>
<li>Tests (testeado el CRUD completo y la funcionalidad de vista detalle.</li>
<li>Buenas prácticas de desarrollo de softwar y SOLID.</li>
<li>Git y commits.</li>
</ul>

## Extras
**Usuarios**
En esta app se puede iniciar sesión con dos tipos de usuario diferente y visualizar opciones en función del rol de cada usuario. También se pueden registrar usuarios nuevos, solo con la capacidad de añadir o eliminar de favoritos. 
**Vistas**
Además de una página de inicio donde se listan todas las fotos, se incluye una página de favoritos, y una vista de detalle. 
Añadida vista de detalle al hacer click en la foto, que nos lleva a una nueva vista en la que podemos ver la fotografía ampliada, con los detalles descritos y podemos añadir (o eliminar) a favoritos dicha imagen. 
Vistas de formularios: formularios de edición, creación, registro y login.


## Explicación del diseño:
La app tiene varias vistas con diferentes opciones, se ha elegido un diseño sencillo para una aplicación básica, con una paleta de tres colores e iconos sencillos. Se ha creado un logotipo alineado con la idea de mantener la simplicidad. En todas las vistas podemos visualizar el logotipo y un icono para la gestión del usuario. Haciendo click en él se nos muestran dos opciones como desplegable: iniciar sesión o registrarse. Una vez iniciada la sesión no aparecerá el icono sino el nombre. Ahí tenemos también la opción de cerrar la sesión. 
En las vistas tenemos las siguientes opciones:
<ul>
<li>Vista Home o de inicio: tendremos a la vista las opciones de añadir foto, editar, eliminar y añadir a favoritos (o eliminarlo de favoritos si el elemento ya está en esa lista). Si no estamos logueados o nuestro usuario no tiene permisos nos redireccionará al formulario de login.</li>
<li>Vista de Favoritos: lista de imágenes que han sido añadidas. Opciones eliminar de favoritos y editar las imágenes.</li>
<li>Vista de Detalle: opciones de editar y añadir a favoritos (o eliminar si ya está en la lista).</li>
</ul>

## ¿Cómo ejecutar el proyecto en local?

Clona el proyecto:
```bash
  git clone https://github.com/mimateach/FabulousPhoto.git
```

Crea una base de datos local en phpMyAdmin con los siguientes datos: 
root, password: "".
Nombre de la base de datos: FabPhoto
Si creamos esa base de datos de cero tenemos que crear cuatro columnas: name, artist, location e img. 

Una vez hecho esto y abierto el proyecto, crear un archivo .env en el que copiemos los datos del archivo .env.example, asegurándonos de que en las líneas 11 a 16 conste la siguiente información:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=FabPhoto
DB_USERNAME=root
DB_PASSWORD=

Entrar en el directorio del proyecto en la terminal y ejecutar el siguiente comando:
```bash
"php artisant migration:fresh --seed".
```
Esto actualizará nuestra base de datos.
**Tendremos que ejecutar este comando cada vez que realizamos cambios en la base de datos del proyecto.**

Instalar las dependencias:
```bash
  composer update
```
```bash
  npm install
```

**¿Cómo abrir el proyecto?**
  Abrir los servidores Apache y MySQL (podemos usar XAMPP u otro programa similar): 

En un terminal, abrir el proyecto con php:
```bash
  php artisan serve
```
En otro terminal, abrir el proyecto con node:
```bash
  npm run dev
```
Abrir desde el enlace generado con el comando **php artisan serve**

## Cómo usarla

Para tener permiso para editar, añadir y eliminar eventos:

**Iniciar sesión como administrador**
usuario: admin@fabphoto.com
contraseña: password

Para ver las opciones de usuario, **iniciar sesión como usuario:**
usuario: user@fabphoto.com
contraseña: password

Es posible registrarse con un usuario nuevo. Tendremos las funciones del usuario común (añadir/ver/eliminar favoritos). 

## Tests

Tests unitarios para: crud completo y vista detalle.
Para ejecutar los tests podemos usar diferentes comandos: 
```bash
  php artisan test
```
O bien: 
```bash
  php artisan test --filter CrudTest
```


## Previews:
<div align="center">
<img align="center" src="public/readme/GIF-VistaMovil.gif">
<img align="center" src="public/readme/GIF-VistaDesktop.gif" style="width:80%">
<img align="center" src="public/readme/GIF-VistaUser.gif" style="width:80%">
<img align="center" src="public/readme/GIF-Editar.gif" style="width:80%">
<img align="center" src="public/readme/GIF-Add.gif" style="width:80%">
</div>


## Quick start
```bash
Npm run dev
```
➕
```bash
PHP artisan serve
```
➕
Servidores abiertos
➕
```bash
php artisan migrate:fresh --seed
```
➕
Login





## Author
Inma Chicón



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
