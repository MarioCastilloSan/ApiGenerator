<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
 
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #000000;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .container-fluid{
                color: black;
                font-size:38px;
            }

            /* 0,76,128 */
            .accordion-item{
                position: relative;
            }
     


            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }



            
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Documentation
                </div>
                <div class="container-fluid">
                    <div class="accordion accordion-flush" id="accordionFlushExample"  >
                        <div class="accordion-item" > 
                          <h1 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                <h1 id="english-documentation-">English Documentation.</h1>
                            </button>
                          </h1>
                          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <h1 id="resume-">Resume 📚</h1>
                                <p>This moudle would ensure the selection of objects(Tables,views,stored procedures) from a database  and obtain its properties(columns, parameters, etc.). This must require auth tokens to generate the CRUD methods  in JSON format for the REST API. This module should also administer already created APIs in somekind of repository allowing it accesss with it s corresponding documentation.</p>
                                <h1 id="objectives">Objectives 📑</h1>
                                    <ul>
                                    <ul><p><strong>Build a tool that must allow in base of the metadata of any table, view or stored procedure  generate the basic API for it maintainance</strong> </p>
                                    <ul>
                                    <ul>Read the database and select tables, stored procedures or views on which you want to build the REST API. </ul>
                                    </ul>
                                </ul>
                                    <ul>
                                    <ul>Obtain the metadata or parameters of the database object dynamically and build the methods it supports according to its permissions to perform the corresponding CRUD <strong>(GET/POST/PUT/DELETE)</strong>.
                                    *Apply security concepts in APIs using Token or API-Key for the authorization of calls or critical procedures and identification of the client that executes the API.</ul>
                                    <ul>A module that allows the management of REST APIs based on the objects found in the database.</ul>
                                    </ul>
                                    </ul>
                                
                                    <h1 id="technologies-involved-">Technologies involved 👩‍💻</h1>
                                        <ul>
                                            <ul>Git, POSTAMN, PHP7, SQLServer 2008 R2, jwt, Laravel</ul>
                                        </ul>
                                 
                                        <h1 id="run-project">RUN PROJECT</h1>
                                        <ul>
                                            <ul>composer install</ul> 
                                            <ul>php artisan serve </ul>
                                            <ul> php artisan migrate #in case you don't have an user table use  to migrate your model and generate it.</ul>
                                        </ul>
                                <h1 id="authors-">Authors ✒️</h1>
                                <p><em>Developer</em></p>
                                        <ul><strong>Mario Castillo</strong> - <em>developer</em> - <a href="https://github.com/MarioCastilloSan/">MarioCastilloSan</a></ul>
                                        <ul><strong>Felipe Espinoza</strong> - <em>developer</em> - <a href="https://github.com/fespinozasanchez/">fespinozasanchez</a></ul>
                                        </ul>
                                        <h1 id="contributing">Contributing</h1>
                                        <p>Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the <a href="https://laravel.com/docs/contributions">Laravel documentation</a>.</p>       
                                        <h1 id="code-of-conduct">Code of Conduct</h1>
                                        <p>In order to ensure that the Laravel community is welcoming to all, please review and abide by the <a href="https://laravel.com/docs/contributions#code-of-conduct">Code of Conduct</a>. 
                                            We also would like to add our own conduct code for this present proyect <a href="https://pillan.inf.uct.cl/~fespinoza/PDF/Codigo%20Etico.pdf">https://pillan.inf.uct.cl/~fespinoza/PDF/Codigo%20Etico.pdf</a>.</p>        
                                            
                                            <h1 id="security-vulnerabilities">Security Vulnerabilities</h1>
                                            <p>If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via <a href="mailto:taylor@laravel.com">taylor@laravel.com</a>. All security vulnerabilities will be promptly addressed.</p>   
                                            <h1 id="license-">License 📓</h1>
                                                <p>The Laravel framework is open-sourced software licensed under the <a href="https://opensource.org/licenses/MIT">MIT license</a>.</p>
                                        
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h1 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                <h1 id="spanish-documentation-">Documentación Español.</h1>
                            </button>
                          </h1>
                          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <h1 id="resume-">Resumen  📚</h1>
                                <p>El módulo permitirá seleccionar objetos (Tablas, vistas, procedimientosalmacenados) dentro de una base de datos y obtener sus propiedades (columnas, parámetros, etc.).En función de ello y de los permisos que tenga generar los métodos respectivos para el CRUD enformato JSON para la API REST.El modulo debe administrar además las APIs ya creadas en algún tipo de repositorio permitiendoacceder a las APIS disponibles, sus parámetros y sus salidas.</p>
                                <h1 id="objectives">Objetivos 📑</h1>
                                    <ul>
                                    <ul><p><strong>Construir una herramienta que permita de acuerdo a la definición de una tablagenerar las APIs básicas de mantenimiento de los registros (CRUD).
                                    </strong> </p>
                                    <ul>
                                    <ul>Leer la base de datos y seleccionar tablas, procedimientos almacenados ovistas sobre los cuales se desea construir la API REST. </ul>
                                    </ul>
                                </ul>
                                    <ul>
                                    <ul>Obtener la metadata o parámetros del objeto de la base de datos de formadinámica y construir los métodos que soporte de acuerdo a sus permisos para realizar un el CRUDcorrespondiente (GET/POST/PUT/DELETE).</ul>
                                    <ul>Aplicar conceptos de seguridad en APIs usando Token o API-Key para laautorización de llamadas o procedimientos críticos e identificación del cliente que ejecuta la API.</ul>
                                    <ul>Un módulo que permita la gestión de API REST en función de los objetosencontrados en la base de datos.</ul>
                                    </ul>
                                    </ul>

                                    <h1 id="technologies-involved-">Tecnologías involucradas 👩‍💻</h1>
                                        <ul>
                                            <ul>Git</ul>
                                            <ul>POSTAMN</ul>
                                            <ul>PHP7</ul>
                                            <ul>SQLServer 2008 R2</ul>
                                            <ul>jwt</ul>
                                            <ul>Laravel</ul>
                                            <ul>CSS</ul>
                                        </ul>
                                
                                        <h1 id="run-project">Para iniciar el proyecto</h1>
                                        <ul>
                                            <ul>composer install</ul> 
                                            <ul>php artisan serve </ul>
                                            <ul> php artisan migrate # En caso que no se posea una tabla de usuario en la estructura de su base de datos # user para generarla en su modelo.</ul>
                                        </ul>
                                <h1 id="authors-">Autores  ✒️</h1>
                                <p><em>Developer</em></p>
                                        <ul>
                                        <ul><strong>Mario Castillo</strong> - <em>developer</em> - <a href="https://github.com/MarioCastilloSan/">MarioCastilloSan</a></ul>
                                        <ul><strong>Felipe Espinoza</strong> - <em>developer</em> - <a href="https://github.com/fespinozasanchez/">fespinozasanchez</a></ul>
                                        </ul>
                                        <h1 id="contributing">Contributing</h1>
                                        <p>¡Gracias por considerar contribuir al marco de Laravel! La guía de contribución se puede encontrar en  <a href="https://laravel.com/docs/contributions">la documentación de Laravel</a>.</p>       
                                        <h1 id="code-of-conduct">Codigo de conducta.</h1>
                                        <p>IPara garantizar que la comunidad de Laravel les dé la bienvenida a todos, revise y respete el <a href="https://laravel.com/docs/contributions#code-of-conduct">Código de conducta</a>. 
                                            También nos gustaría agregar nuestro propio código de conducta para este presente proyecto <a href="https://pillan.inf.uct.cl/~fespinoza/PDF/Codigo%20Etico.pdf">Código pérsonal</a>.</p>        
                                            
                                            <h1 id="security-vulnerabilities">Vulnerabilidades de seguridad.</h1>
                                            <p>Si descubre una vulnerabilidad de seguridad dentro de Laravel, envíe un correo electrónico a Taylor Otwell a través de <a href="mailto:taylor@laravel.com">taylor@laravel.com</a>. Todas las vulnerabilidades de seguridad se abordarán de inmediato.</p>   
                                            <h1 id="license-">Licencia 📓</h1>
                                                <p>El marco de Laravel es un software de código abierto con licencia de licencia MIT  <a href="https://opensource.org/licenses/MIT">MIT license</a>.</p>
                             
                            
                            
                            
                            
                            </div>
                        </div>
                      </div>

                </div>
                <div class="links">
                    <a href="{{ url('/') }}">Home</a>
                    <a href="https://github.com/MarioCastilloSan/ApiGenerator/tree/develop">GitHub</a>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</html>
