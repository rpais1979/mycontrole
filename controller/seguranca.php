<?php
if(!isset($seguranca)){exit;}
function seguranca(){
    if((isset($_SESSION['desloin'])) AND (isset($_SESSION['despassword']))){
        //echo "permanecer logado";
    }else{
        //include_once("config/config.php");
        $_SESSION['msg'] = "<div class='alert alert-danger'>Para acessar a página necessário realizar o login!</div>";
        //$url_destino = pg."/login.php";
        header("Location: /admin/login");
    }
}
