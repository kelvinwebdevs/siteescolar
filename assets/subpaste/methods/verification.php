<?php

function verificar($path){
    if (!$_SESSION['id']){
        header('Location:'.$path);
        exit;
    }
}


?>