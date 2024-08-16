<?php
    include("config.php");
    if(isset($_POST["email"]) && isset($_POST["senha"])){

        $v = 0;
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $consultar = "SELECT * FROM cadastramento";
        $result = $conectar->query($consultar)->fetchAll();

        foreach($res as $result){
            if($res["email"] == $email && $res["senha"] == $senha){
                $v = 1;
            }
        }
        if($v == 1){
            header("Location: ../perfil.php");
        }
        else{
            header("Location: ../login.php");
        }
    }
?>