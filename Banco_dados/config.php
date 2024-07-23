<?php
    $hostname = "localhost";
    $user = "root";
    $password = "";
    $base = "Curso";

    $conectar = new mysqli($hostname, $user,$password, $base);
    if($conectar->connect_errno){
        echo "<script>
            alert('Falha ao conectar com o banco de dados'".$conectar->connect_errno."' ". $conectar->connect_error.")
        </script>";
    }
?>