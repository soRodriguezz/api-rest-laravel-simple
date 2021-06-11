# API REST simple en Laravel 8

API que crea dos tablas en una base de datos MySQL:
* Categoria
* Producto

La base de datos debe llevar como nombre `ex_laravel` el cual puede ser modificado en el archivo `.env`.

El proyecto solo esta habilitado como CRUD de categoria.


---

### Requisitos 📃
* XAMPP (PHP, Apache y MySQL)
* IDE (PHPStorm, Netbeans,VSCode, etc)
* Postman


---

### Comando utiles
* Para levantar el servidor:
`$ php artisan serve`

* Para generar un nuevo modelo:
`$php artisan make:model name_model`

* Para generar un nuevo controlador
`$php artisan make:controller name_controller`


---

### URLs proyecto
* Listar categorias:
> /api/categoria

* Listar caterogia por ID:
> categoria/{id}

* Agregar categoria: 
> addcategoria

* Modificar categoria:
> updatecategoria/{id}

* Eliminar categoria por ID:
> deletecategoria/{id}

#### En la carpeta 'postman' para importar todas las rutas y datos a Postman
