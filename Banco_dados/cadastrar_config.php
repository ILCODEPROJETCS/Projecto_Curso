<?php
    include("config.php");
    if  (isset($_POST["nome"]) && isset($_POST["sobrenome"]) && isset($_POST["email"])
        && isset($_POST["sexo"]) && isset($_POST["senha"])){

        $noExist = 0;
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $sexo = $_POST["sexo"];
        $senha = $_POST["senha"];

        if($sexo == "Masculino"){
            $sexo = "M";
        }
        else{
            $sexo = "F";
        }
        $consultar = "SELECT * FROM cadastramento";
        $executar = $conectar->query($consultar);
        $verif = $executar->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($verif as $v){
            if(!($v["Email"] == $email)){
                $noExist = 1;
            }
            else{
                $noExist = 0;
                return;
            }
        }
        if($noExist == 1){
            $inserir = "INSERT INTO cadastramento VALUES (default, '$nome', '$sobrenome', '$email', '$sexo', '$senha')";
            $result = $conectar->query($inserir);
            header("Location: ../depoisCadastramento.php");
        }
        else{
            echo "<script> alert('Email já cadastrado')</script>";
            header("Location: ../Cadastramento.php");
        }
    }
    else{
        header("Location: ../Cadastramento.php");
    }
?>