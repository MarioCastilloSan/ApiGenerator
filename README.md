<h1>ApiGenerator</h1>

--------------------------------------------------------

## Resume 📚
El módulo permitirá seleccionar objetos (Tablas, vistas, procedimientosalmacenados) dentro de una base de datos y obtener sus propiedades (columnas, parámetros, etc.).En función de ello y de los permisos que tenga generar los métodos respectivos para el CRUD enformato JSON para la API REST.El modulo debe administrar además las APIs ya creadas en algún tipo de repositorio permitiendoacceder a las APIS disponibles, sus parámetros y sus salidas.

## Objectives
* **Construir una herramienta que permita de acuerdo a la definición de una tablagenerar las APIs básicas de mantenimiento de los registros (CRUD).** 

 * Leer la base de datos y seleccionar tablas, procedimientos almacenados ovistas sobre los cuales se desea construir la API REST.
* Obtener la metadata o parámetros del objeto de la base de datos de formadinámica y construir los métodos que soporte de acuerdo a sus permisos para realizar un el CRUDcorrespondiente **(GET/POST/PUT/DELETE)**.
* Aplicar conceptos de seguridad en APIs usando Token o API-Key para laautorización de llamadas o procedimientos críticos e identificación del cliente que ejecuta la API.
* Un módulo que permita la gestión de API REST en función de los objetosencontrados en la base de datos.
 


## Technologies involved 👩‍💻

```
Git
POSTAMN
Laravel
PHP7
SQLServer 2008R2
```

## RUN PROJECT
```cmd
    composer install
    php artisan serve
```


## Authors ✒️

_Developer_

* **Felipe Arellano** - *developer* - [FelipeArellanoV](https://github.com/FelipeArellanoV/)
* **Nicolas Muñoz** - *developer* - [NicolasCamposMa](https://github.com/NicolasCamposMa)
* **Matias Arias** - *developer* - [SrAriass](https://github.com/SrAriass/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License 📓

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
