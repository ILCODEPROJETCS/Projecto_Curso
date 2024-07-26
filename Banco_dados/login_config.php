<?php
    include_once("config.php");

    if(isset($_POST["email"]) && isset($_POST["senha"])){
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $consultar = "SELECT * FROM cadastramento";
        $result = $conectar->query($consultar)->fetch_object();

        foreach($res as $result){
            if($res["Email"] == $email && $res["Senha"] == $senha){
                $v = 1;
            }
        }
    }
?>