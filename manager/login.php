<?php
    session_start();    //세션 시작
 
    
    $title = 'Login';
    require('config.php');  //관리자 이메일, 비번
    include('../inc/header.php');   //HTML 시작
    require_once('../inc/functions.php');   //필요한 함수

    //error 출력
    if(isset($_GET['error'])){ 
        echo $_GET['error'];
   }
?>

<form action="login2.php" method="POST">
    <p>
        <lable for="email">Email:</lable>
        <input type="text" name="email" id="email">
    </p>
    <p>
        <lable for="password">Password:</lable>
        <input type="password" name="password" id="password">
    </p>
        <input type="submit" name="login" value="Sign in"> 
        <a href="sign.php"><input type="button" name="Sign" value="Sign up"></a>
    </p>
</form>


<div class="error">
<p>
    <?php
        if(isset($status)){
            echo $status;
        }
    ?>
</p>
</div>

<?php include('../inc/footer.php'); ?>

<!--
    session_start(); 세션시작
    $_SESSION['name'] = '오하빈' //값 지정
    $_SESSION['name']   //값 확인

    unset($_SESSION['name'])    //값 지우기
    $_SESSION['name']=""    //값 초기화

    session_unset();     //세션 배열 모든 값 비우기
    session_destroy();  //세션 배열 자체도 없애기
-->
