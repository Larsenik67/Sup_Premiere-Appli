<?php 

function del(){
    unset($_SESSION['products'][$_GET['index']]);
}

function delall(){
    unset($_SESSION['products']);
}

function inc(){
    $_SESSION['products'][$_GET['index']]['qtt']++;
}

function dec(){
    $_SESSION['products'][$_GET['index']]['qtt']--;
    if(($_SESSION['products'][$_GET['index']]['qtt']) <= 0){
        del();
    }
}

?>