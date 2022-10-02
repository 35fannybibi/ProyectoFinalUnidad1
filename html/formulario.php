<?php

include("../config/database.php");

class Estudiante
{
    public $conexion;

    function __construct()
    {
        $db = new Database();

        $this->conexion = $db->connectToDatabase();
    }

    function save($params)
    {

        $nombre = $params["nombre"];
        $edad = $params["edad"];
        $interes = $params["interes"];
        $direccion = $params["direccion"];
        $telefono = $params["telefono"];
        $acudiente = $params["acudiente"];

        $insert = "INSERT INTO estudiante values (NULL,'$nombre',$edad, '$interes', '$direccion', $telefono, '$acudiente')";
        return mysqli_query($this->conexion, $insert);
    }

    function getAll()
    {
        $sql = "SELECT * FROM estudiante";
        return mysqli_query($this->conexion, $sql);
    }

    function getOne($id)
    {
        $sql = "SELECT * FROM estudiante WHERE id_estudiante = $id";
        return mysqli_query($this->conexion, $sql);
    }

    function update($params)
    {

        $nombre = $params["nombre"];
        $edad = $params["edad"];
        $interes = $params["interes"];
        $direccion = $params["direccion"];
        $telefono = $params["telefono"];
        $acudiente = $params["acudiente"];
        $id_estudiante = $params["id_estudiante"];


        $update = "UPDATE estudiante SET nombre='$nombre', edad=$edad, interes='$interes', direccion='$direccion', telefono=$telefono, acudiente='$acudiente' WHERE id_estudiante = $id_estudiante";
        return mysqli_query($this->conexion, $update);
    }

    function delete($id)
    {

        $delete = "DELETE FROM estudiante WHERE id_estudiante = $id";
        return mysqli_query($this->conexion, $delete);
    }
}

$e = new Estudiante();



if (isset($_POST) && !empty($_POST)) {

    if ($_POST["tipo_peticion"] == "insert") {
        $save = $e->save($_POST);

        if ($save) {
            $mensaje = '<div class = "alert alert-success" style="height:50px; margin:0"> Registro exitoso</div>';
        } else {
            $mensaje = '<div class = "alert alert-danger" style="height:50px; margin:0"> Registro fallido</div>';
        }
    } else {

        $update = $e->update($_POST);

        if ($update) {
            $mensaje = '<div class = "alert alert-success" style="height:50px; margin:0"> Modificación exitosa</div>';
        } else {
            $mensaje = '<div class = "alert alert-danger" style="height:50px; margin:0"> Modificación fallida</div>';
        }
    }
}

$data = $e->getAll();

$nombreOne = "";
$edadOne = "";
$interesOne = "";
$direccionOne = "";
$telefonoOne = "";
$acudienteOne = "";
$id_estudianteOne = "";

if (isset($_GET)) {
    # code...

    if (isset($_GET["id_estudiante"])) {

        $dataOne = mysqli_fetch_object($e->getOne($_GET["id_estudiante"]));

        if ($dataOne != null) {

            $nombreOne = $dataOne->nombre;
            $edadOne = $dataOne->edad;
            $interesOne = $dataOne->interes;
            $direccionOne = $dataOne->direccion;
            $telefonoOne = $dataOne->telefono;
            $acudienteOne = $dataOne->acudiente;
            $id_estudianteOne = $dataOne->id_estudiante;
        }

    } else if (isset($_GET["id_estudiante_eliminar"])) {

        $deleteOne = $e->delete($_GET["id_estudiante_eliminar"]);       
    }

    $data = $e->getAll();
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formulariostyle.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <title>Pagina principal</title>
</head>

<body>
    <header>
        <div class="header_imagen">
            <img src="../imagenes/header.jpg" alt="imagen de inicio">
        </div>
        <div class="header_titulo">
            <h1>pacifico escuela web</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="pagina.php">Elementos culturales</a></li>
                <li><a href="formulario.php">Formulario</a></li>
            </ul>
        </nav>
    </header>
    <div class="respuesta" style="margin:0;">
        <?php
        if (isset($mensaje)) {
            echo $mensaje;
        }
        ?>
    </div>

    <section class="contenedor">
        <section class="registro">
            <h1>Registro</h1>
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ejemplo: Carmen Garcia Morales">
                    <input type="hidden" id="tipo_peticion" name="tipo_peticion" value="insert">
                </div>
                <div class="mb-3">
                    <label for="edad" class="form-label">Edad:</label>
                    <input type="text" class="form-control" id="edad" name="edad" placeholder="Ejemplo: 12">
                </div>

                <div class="mb-3">
                    <label for="interes" class="form-label">interes:</label>
                    <select class="form-select" aria-label="Default select example" name="interes" id="interes">
                        <option value="Gastronomía">Gastronomía</option>
                        <option value="Musica">Musica</option>
                        <option value="Danza">Danza</option>
                        <option value="Turísmo">Turísmo</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="direccion" class="form-label">dirección:</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ejemplo: Barrio El Bolivar">
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">teléfono:</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ejemplo: 312566787">
                </div>
                <div class="mb-3">
                    <label for="acudiente" class="form-label">Acudiente:</label>
                    <input type="text" class="form-control" id="acudiente" name="acudiente" placeholder="Ejemplo: Santiago Garcia Morales">
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 20px;">Registrar</button>
            </form>
        </section>

        <section class="consulta" style="text-transform: uppercase;">
            <h1 style="text-align: center; margin-bottom: 25px;">Consulta</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Interes</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Acudiente</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($e = mysqli_fetch_object($data)) {
                    ?>

                        <tr>
                            <td><?php echo $e->id_estudiante ?></td>
                            <td><?php echo $e->nombre ?></td>
                            <td><?php echo $e->edad ?></td>
                            <td><?php echo $e->interes ?></td>
                            <td><?php echo $e->direccion ?></td>
                            <td><?php echo $e->telefono ?></td>
                            <td><?php echo $e->acudiente ?></td>
                        </tr>
                </tbody>

            <?php
                    }
            ?>
            </table>

        </section>

        <section class="actualizacion">
            <h1>Actualizacion</h1>

            <form>
                <div class="mb-3">
                    <label for="id_estudiante" class="form-label">id el estudiante:</label>
                    <input type="text" class="form-control" id="id_estudiante" name="id_estudiante">
                </div>
                <button style="width: 100%; margin-top: 20px; margin-bottom: 20px;" class="btn btn-primary"><a href="formulario.php?id_estudiante=" +id_estudiante></a>Consultar estudiante</button>
            </form>

            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value=<?= $nombreOne ?>>
                    <input type="hidden" id="id_estudiante" name="id_estudiante" value=<?= $id_estudianteOne ?>>
                    <input type="hidden" id="tipo_peticion" name="tipo_peticion" value="update">
                </div>
                <div class="mb-3">
                    <label for="edad" class="form-label">Edad:</label>
                    <input type="text" class="form-control" id="edad" name="edad" value=<?= $edadOne ?>>
                </div>

                <div class="mb-3">
                    <label for="interes" class="form-label">interes:</label>
                    <select class="form-select" name="interes" id="interes" value="Danza">
                        <option value="Gastronomía">Gastronomía</option>
                        <option value="Musica">Musica</option>
                        <option value="Danza">Danza</option>
                        <option value="Turísmo">Turísmo</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="direccion" class="form-label">dirección:</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value=<?= $direccionOne ?>>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">teléfono:</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value=<?= $telefonoOne ?>>
                </div>
                <div class="mb-3">
                    <label for="acudiente" class="form-label">Acudiente:</label>
                    <input type="text" class="form-control" id="acudiente" name="acudiente" value=<?= $acudienteOne ?>>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 20px;">Actualizar</button>
            </form>
        </section>

        <section class="eliminacion">
            <h1>Eliminacion</h1>
            <form>
                <div class="mb-3">
                    <label for="id_estudiante_eliminar" class="form-label">id el estudiante:</label>
                    <input type="text" class="form-control" id="id_estudiante_eliminar" name="id_estudiante_eliminar">
                </div>
                <button style="width: 100%; margin-top: 20px; margin-bottom: 20px;" class="btn btn-primary"><a href="formulario.php?id_estudiante_eliminar=" +id_estudiante_eliminar></a>Eliminar estudiante</button>
            </form>
        </section>

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