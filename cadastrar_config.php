<?php
    include("config.php");
    if  (isset($_POST["nome"]) && isset($_POST["sobrenome"]) && isset($_POST["email"])
        && isset($_POST["sexo"]) && isset($_POST["senha"])){

        $exist = 0;
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
        $executar->execute();   
        foreach($v as $verif){
            if(!($v["email"] == $email)){
                $exist = 1;
            }
            else{
                $exist = 0;
            }
        }
        if($exist == 1){
            $inserir = "INSERT INTO cadastramento VALUES (default, '$nome', '$sobrenome', '$email', '$sexo', '$senha')";
            $result = $conectar->query($inserir);
            header("Location: ./depoisCadastramento.php");
        }
        else{
            echo "<script> alert('Email já cadastrado')</script>";
            header("Location: ./Cadastramento.php");
        } 
    }
    else{
        header("Location: ./Cadastramento.php");
    }
    
?>