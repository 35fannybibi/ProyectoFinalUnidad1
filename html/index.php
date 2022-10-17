<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/iniciostyle.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <title>Pagina principal</title>
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
    <section>
        <div class="c1">
            <div class="card" style="width: 18rem;">
                <img style="height: 350px;" src="../imagenes/card.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h1 style="font-size: 14px; text-align: center;">GIMNASIO COOPERATIVO DEL PACIFICO</h1>
                    <p style="text-align: justify;" class="card-text">
                        Somos personas con fines de dar a conocer nuestra región pacifica, desde los centros educativo o
                        en
                        espacios
                        virtuales debido a que hace parte de nuestras cultura donde mostraremos lar riquezas de nuestra
                        región o
                        cultural.
                    </p>
                </div>
            </div>
        </div>

        <div class="c2">
            <div class="card" style="width: 18rem;">
                <img style="height: 350px;" src="../imagenes/card2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h1 style="font-size: 14px; text-align: center;">GIMNASIO COOPERATIVO DEL PACIFICO</h1>
                    <p style="text-align: justify;" class="card-text">
                    Llevar a los educando y padres de familia a conocer afondo su entorno cultural, mostrando desde
                        los espacios virtuales elementos como: bailes típicos, trajes, instrumentos musicales, comidas
                        típicas, bebidas, lugares históricos y turísticos, productos y dulces etc.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="video_intro">
            <video width="90%" height="300" controls>
                <source src="../videos/introductorio.mp4" type="video/mp4">
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