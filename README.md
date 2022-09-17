
<h1>ApiGenerator</h1>

--------------------------------------------------------
## English Documentation.

## Resume 📚
This moudle would ensure the selection of objects(Tables,views,stored procedures) from a database  and obtain its properties(columns, parameters, etc.). This must require auth tokens to generate the CRUD methods  in JSON format for the REST API. This module should also administer already created APIs in somekind of repository allowing it accesss with it s corresponding documentation.

## Objectives
* **Build a tool that must allow in base of the metadata of any table, view or stored procedure  generate the basic API for it maintainance** 

 *Read the database and select tables, stored procedures or views on which you want to build the REST API. 
* Obtain the metadata or parameters of the database object dynamically and build the methods it supports according to its permissions to perform the corresponding CRUD **(GET/POST/PUT/DELETE)**.
*Apply security concepts in APIs using Token or API-Key for the authorization of calls or critical procedures and identification of the client that executes the API.
* A module that allows the management of REST APIs based on the objects found in the database.


## Technologies involved 👩‍💻

```
Git
POSTAMN
Laravel
PHP7
SQLServer 2008R2
jwt-auth
```
## RUN PROJECT
```py
    composer install
    php artisan serve
    php artisan migrate #in case you don't have an user table use  to migrate your model and generate it.
```
## Authors ✒️

_Developer_

* **Mario Castillo** - *developer* - [MarioCastilloSan](https://github.com/MarioCastilloSan/)
* **Felipe Espinoza** - *developer* - [fespinozasanchez](https://github.com/fespinozasanchez/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).
We also would like to add our own conduct code for this present proyect https://pillan.inf.uct.cl/~fespinoza/PDF/Codigo%20Etico.pdf.

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License 📓

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).





## Documentacion Español.
## Resumen 📚
El módulo permitirá seleccionar objetos (Tablas, vistas, procedimientosalmacenados) dentro de una base de datos y obtener sus propiedades (columnas, parámetros, etc.).En función de ello y de los permisos que tenga generar los métodos respectivos para el CRUD enformato JSON para la API REST.El modulo debe administrar además las APIs ya creadas en algún tipo de repositorio permitiendoacceder a las APIS disponibles, sus parámetros y sus salidas.

## Objectivos
* **Construir una herramienta que permita de acuerdo a la definición de una tablagenerar las APIs básicas de mantenimiento de los registros (CRUD).** 


 * Leer la base de datos y seleccionar tablas, procedimientos almacenados ovistas sobre los cuales se desea construir la API REST.
* Obtener la metadata o parámetros del objeto de la base de datos de formadinámica y construir los métodos que soporte de acuerdo a sus permisos para realizar un el CRUDcorrespondiente **(GET/POST/PUT/DELETE)**.
* Aplicar conceptos de seguridad en APIs usando Token o API-Key para laautorización de llamadas o procedimientos críticos e identificación del cliente que ejecuta la API.
* Un módulo que permita la gestión de API REST en función de los objetosencontrados en la base de datos.
 


## Tecnologías involucradas 👩‍💻

```
Git
POSTAMN
Laravel
PHP7
SQLServer 2008R2
jwt-auth
```

## Para iniciar el proyecto.
```py
    composer install
    php artisan serve
    php artisan migrate # En caso que no se posea una tabla de usuario en la estructura de su base de datos 
                        # usarpara generarla en su modelo.
```


## Autores ✒️

_Developer_

* **Mario Castillo** - *developer* - [MarioCastilloSan](https://github.com/MarioCastilloSan/)
* **Felipe Espinoza** - *developer* - [fespinozasanchez](https://github.com/fespinozasanchez/)

## Contribuciones.
¡Gracias por considerar contribuir al marco de Laravel! La guía de contribución se puede encontrar en la [documentación de Laravel] (https://laravel.com/docs/contributions).

## Codigo de conducta.
Para garantizar que la comunidad de Laravel les dé la bienvenida a todos, revise y respete el [Código de conducta] (https://laravel.com/docs/contributions#code-of-conduct).
También nos gustaría agregar nuestro propio código de conducta para este presente proyecto https://pillan.inf.uct.cl/~fespinoza/PDF/Codigo%20Etico.pdf.

## Vulnerabilidades de seguridad.

Si descubre una vulnerabilidad de seguridad dentro de Laravel, envíe un correo electrónico a Taylor Otwell a través de [taylor@laravel.com](mailto:taylor@laravel.com). Todas las vulnerabilidades de seguridad se abordarán de inmediato.

## Licencia 📓

El marco de Laravel es un software de código abierto con licencia de [licencia MIT] (https://opensource.org/licenses/MIT).
