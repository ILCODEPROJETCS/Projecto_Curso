<?php
    include("config.php");
    if(isset($_POST["email"]) && isset($_POST["senha"])){

        $v = 0;
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $consultar = "SELECT * FROM cadastramento";
        $executar = $conectar->query($consultar);
        $result = $executar->fetchAll(PDO::FETCH_ASSOC);
        $executar->execute();

        foreach($res as $result){
            if($res["email"] == $email && $res["senha"] == $senha){
                $v = 1;
                return;
            }
        }
        if($v == 1){
            header("Location: ./perfil.php");
        }
        else{
            header("Location: ./login.php");
        }
    }
?>