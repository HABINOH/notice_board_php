<?php

function output($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}

function authenticate_user($email, $password){
    if($email = USER_NAME && $password == PASSWORD){
        return true;
    }
}

function redirect($url){    //화면 이동
    header("Location:$url");
}

function is_user_authenticated(){
    return isset($_SESSION['email']);
}

function ensure_user_is_authenticated(){
    if(!is_user_authenticated()){
        redirect("login.php");
        die();
    }
}

?>