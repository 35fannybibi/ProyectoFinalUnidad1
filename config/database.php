<?php

class Database{

    /**
     * Clase para la conexion a base de datos
     */

    //Servidor 
    public $host = 'localhost';

    //Usuario
    public $user = "root";

    //Contraseña
    public $pass = "";

    //Base de datos
    public $db = "pacifico_web";

    public $conexion;

    function connectToDatabase(){
        $this->conexion = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if (mysqli_connect_error()) {
            echo "error de conexiòn " .mysqli_connect_error();   
        }
        return $this->conexion;
    }


}




?>