<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/paginastyle.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <title>Pagina principal</title>
    <style>
        @media (max-width: 770px) {

            .estructura {
                display: grid;
                grid-template-columns: 1f;
                grid-template-rows: 1fr 1fr 1fr 1fr;
            }

            .c1 {
                grid-column: 1;
                grid-row: 1;
            }

            .c2 {
                grid-column: 1;
                grid-row: 2;
            }

            .c3 {
                grid-column: 1;
                grid-row: 3;
            }

            .c4 {
                grid-column: 1;
                grid-row: 4;
            }

        }
    </style>
</head>

<body>
    <header>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="width: 100%;height: 300px;" src="../imagenes/header.jpg" class="d-block w-100 header_imagen" alt="...">

                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: black; font-weight: bold;">Pacífico y sus generaciones</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img style="width: 100%;height: 300px;" src="../imagenes/header1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: white; font-weight: bold;">Diversidad cultural</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img style="width: 100%;height: 300px;" src="../imagenes/header3.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="color: black; font-weight: bold;">Gastronomía única</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="header_titulo">
            <h1>pacifico escuela web</h1>
        </div>

        <nav>

            <ul class="nav justify-content-end">

                <li class="nav-item"><a style="color: black;" class="nav-link" href="index.php">Inicio</a></li>
                <li class="nav-item"><a style="color: black;" class="nav-link" href="pagina.php">Elementos culturales</a></li>
                <li class="nav-item"><a style="color: black;" class="nav-link" href="formulario.php">Registrate aquí</a></li>
            </ul>
        </nav>
    </header>
    <section class="estructura">
        <div class="c1">
            <div class="card">
                <div class="card_imagen_dos">
                    <img src="../imagenes/bailes.jpg" alt="">
                    <img src="../imagenes/instrumentos.jpg" alt="">
                </div>
                <div class="card_titulo">
                    <hr>
                    <h1>Bailes e instrumentos musicales</h1>
                    <hr>
                </div>
                <div class="card_cuerpo">
                    <p>
                        En la actualidad existen varias danzas en la región pacifica, entre ellas encontramos:
                    <ul>
                        <li>El currulao</li>
                        <li>La jota</li>
                        <li>El makerule</li>
                        <li>El abozao</li>
                        <li>La moña</li>
                    </ul>
                    Por otro la lado, entre los instrumentos musicales están:

                    <ul>
                        <li>Bombo</li>
                        <li>Carángano de bolillo</li>
                        <li>Cununo macho y hembra</li>
                        <li>Marimba de chonta</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>

        <div class="c2">
            <div class="card">
                <div class="card_imagen_dos">
                    <img src="../imagenes/comidas.jpg" alt="">
                    <img src="../imagenes/bebidas.jpg" alt="">
                </div>
                <div class="card_titulo">
                    <hr>
                    <h1>Comidas y bebidas típicas</h1>
                    <hr>
                </div>
                <div class="card_cuerpo">
                    <p>
                        Entre las comidas típicas se encuentran los aborrajados de
                        pescado, ensalada de calamar, camarón o langostinos, empanada de Jaiba (Cangrejo Azul), sopa de
                        lentejas con pescado ahumado, entre otros.
                    </p>

                    <p>
                        Entre las bebidas se encuentran viche, arrechón, tumbacatre , tomaseca, crema de vicre, entre
                        otros.
                    </p>
                </div>
            </div>
        </div>
        <div class="c3">
            <div class="card">
                <div class="card_imagen">
                    <img src="../imagenes/turistico.jpg" alt="">
                </div>
                <div class="card_titulo">
                    <hr>
                    <h1>Lugares turísticos</h1>
                    <hr>
                </div>
                <div class="card_cuerpo">
                    <p>
                    <ul>
                        <li>Playa Juan de Dios</li>
                        <li>Juanchaco</li>
                        <li>Catedral de Buenaventura</li>
                        <li>Centro Comercial Viva Buenaventura</li>
                        <li>Bulevart buenaventura</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>

        <div class="c4">
            <div class="card">
                <div class="card_imagen">
                    <img src="../imagenes/afrocolombianidad.jpg" alt="">
                </div>
                <div class="card_titulo">
                    <hr>
                    <h1>Eventos</h1>
                    <hr>
                </div>
                <div class="card_cuerpo">
                    <p>
                    <ul>
                        <li>El 26 de octubre a las 4:00 pm se realizaran clases de bailes típicos</li>
                        <li>El 30 de octubre se llevara a cabo una feria cultural y se darán muestras de comidas
                            típicas</li>
                        <li>El 24 de octubre se efectura una salida turística hacia Juanchaco</li>
                    </ul>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="video_intro">
            <video width="90%" height="300" controls>
                <source src="../videos/video.mp4" type="video/mp4">
            </video>
        </div>
    </section>
    <footer>
        <div class="f1">
            <address> Derechos reservados Fanny Angulo</address>
        </div>
        <div class="f2">
            <img src="../imagenes/logo.png" alt="">
        </div>
        <div class="f3">
            <ul>
                <li><a href="">Facebook</a></li>
                <li><a href="">Twitter</a></li>
                <li><a href="">Instagram</a></li>
                <li><a href="">Youtube</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>