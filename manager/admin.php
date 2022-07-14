<?php
    session_start();
    require_once('config.php');
    require_once('../inc/functions.php');

    //아무 정보 없이 admin.php로 접속하면 login 페이지로 이동 시킴
    ensure_user_is_authenticated(); 

    echo $_SESSION['email'];
    include('../inc/header.php');
?>

<a href="logout.php">LOGOUT</a>

<?php include('../inc/footer.php'); ?>
