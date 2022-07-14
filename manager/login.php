<?php
    session_start();    //세션 시작
 
    
    $title = 'Login';
    require('config.php');  //관리자 이메일, 비번
    include('../inc/header.php');   //HTML 시작
    require_once('../inc/functions.php');   //필요한 함수

    
//$_SERVER['SERVER_NAME'] => 도메인(www.~~~.~~~)
//$_SERVER['PHP_SELF'] => 파일의 주소(login.php)
//사용자 입력한 값 확인
    /*if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //echo $_POST['email'];
        output($_POST);
    }*/
    if(isset($_POST['login'])){
        //output($_POST);
        //email 형식에 맞는지 검사하는 명령어
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = $_POST['password'];

        if($email == false){
            $status = '이메일 형식에 맞게 입력해주세요.';
        }

        if(authenticate_user($email, $password)){   //email, password 확인 함수
            $_SESSION['email'] = $email;
            redirect("admin.php");
            die();
        }else{
            $status = '비밀번호 불일치';
        }
    }

?>

<form action="" method="POST">
    <p>
        <lable for="email">Email:</lable>
        <input type="text" name="email" id="email">
    </p>
    <p>
        <lable for="password">Password:</lable>
        <input type="password" name="password" id="password">
    </p>
    <p>
        <input type="submit" name="login" value="Login">
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