<?php
    include_once ("config.php");
    if(isset($_SESSION['logado']) && !empty($_SESSION['logado'])){
       $userLogado = user_logado($_SESSION['logado']);
       $nome = $userLogado["Nome"]." ".$userLogado["Sobrenome"];
    }
    else{
        header("Location: ./login.php");
    }
    function user_logado($cod){
        include_once("config.php");
        global $conectar;
        $sql = "SELECT Nome, Sobrenome FROM cadastramento WHERE Codigo = :Codigo";
        $sql = $conectar->prepare($sql);
        $sql->bindValue("Codigo", $cod);
        $sql->execute();
        if($sql->rowCount() > 0){
            $nomes = $sql->fetch();
        }
        return $nomes;
    }
?>