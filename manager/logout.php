<?php
    session_start();
    session_unset();    //세션 정보 제거
    session_destroy();  //세션 배열 제거

    require_once('../inc/functions.php');
    redirect("login.php");
    die();
?>