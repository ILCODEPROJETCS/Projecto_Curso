<?php
    include("config.php");
    if(isset($_POST["email"]) && isset($_POST["senha"])){

        $v = 0;
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $consultar = "SELECT * FROM cadastramento";
        $executar = $conectar->query($consultar);
        $result = $executar->fetchAll(PDO::FETCH_ASSOC);

        foreach($result as $res){
            if($res["Email"] == $email && $res["Senha"] == $senha){
                $v = 1;
                header("Location: ../perfil.php");
                return;
            }
        }
    }
    else{
        header("Location: ../login.php");
    }
?>