<?php
    include("config.php");
    $v = 0;
    if(isset($_POST["email"]) && isset($_POST["senha"]) && (!empty($_POST["email"])) && (!empty($_POST["senha"]))){
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $consultar = "SELECT * FROM cadastramento";
        $result = $conectar->query($consultar);
        $dados = $result->fetchAll();

        foreach($res as $dados){
            if($res["email"] == $email && $res["senha"] == $senha){
                $v = 1;
            }
        }
        if($v == 1){
            header("Locattion: ../perfil.php");
        }
        else{
            header("Location: ../login.php");
        }
    }
?>