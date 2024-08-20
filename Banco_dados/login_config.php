<?php
    if(isset($_POST["email"]) && isset($_POST["senha"])){
       if(logado() == true){
        if(isset($_SESSION['logado'])){
            header("Location: ../perfil.php");
        }
        else{
            header("Location: ../login.php");
        }
       }
       else{
        header("Location: ../login.php");
       }
    }
    else{
        header("Location: ../login.php");
    }

    function logado(){
        include("config.php");
        $email = addslashes($_POST["email"]);
        $senha = addslashes($_POST["senha"]);

        $consultar = "SELECT * FROM cadastramento";
        $executar = $conectar->query($consultar);
        $result = $executar->fetchAll(PDO::FETCH_ASSOC);

        foreach($result as $res){
            if($res["Email"] == $email && $res["Senha"] == $senha){
                $_SESSION['logado'] = $res['Codigo'];
                return true;
            }
            else{
                return false;
            }
        }
    }
?>