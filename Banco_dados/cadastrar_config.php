<?php
    include("config.php");
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
    $verif = $conectar->query($consultar)->fetchAll();
    echo "<script> alert('Email já cadastrado1111')</script>";
    foreach($v as $verif){
        if(!($v["email"] == $email)){
            $exist = 1;
            echo "<script> alert('Email já cadastrado3333')</script>";
        }
        else{
            $exist = 0;
        }
    }
    if($exist == 1){
        echo "<script> alert('Email já cadastrado000000')</script>";
        $inserir = "INSERT INTO cadastramento VALUES (default, '$nome', '$sobrenome', '$email', '$sexo', '$senha')";
        echo "<script> alert('Email já cadastrado444444')</script>";
        $result = $conectar->query($inserir);
        header("Location: ./depoisCadastramento.php");
    }
    else{
        echo "<script> alert('Email já cadastrado')</script>";
        header("Location: ../Cadastramento.php");
    } 
?>