<?php
    include_once("config.php");

    if (isset($_POST["nome"]) && isset($_POST["sobrenome"]) && isset($_POST["email"])
        && isset($_POST["sexo"]) && isset($_POST["senha"]) && isset($_POST["senha_confirm"])
        && isset($_POST["checar"])){

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
        $verif = $conectar->query($consultar)->fetch_object();

        foreach($v as $verif){
            if(!($v["Email"] == $email)){
                $exist = 1;
            }
        }
        if($exist == 1){
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