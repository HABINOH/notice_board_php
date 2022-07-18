<?php
//    session_start();    //세션 시작

//$title = 'Login';
//require('config.php');  //관리자 이메일, 비번
//include('../inc/header.php');   //HTML 시작
//require_once('../inc/functions.php');   //필요한 함수

//$_SERVER['SERVER_NAME'] => 도메인(www.~~~.~~~)
//$_SERVER['PHP_SELF'] => 파일의 주소(login.php)
//사용자 입력한 값 확인
    /*if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //echo $_POST['email'];
        output($_POST);
    }*/
    /*if(isset($_POST['login'])){
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
    }*/
include('db.php');
    
if(isset($_POST['email']) && isset($_POST['password'])){ 
    //보안 코딩
    $user_id = mysqli_real_escape_string($db, $_POST['email']);
    $user_pass = mysqli_real_escape_string($db, $_POST['password']);

    if(empty($user_id)){
        echo "<script>
        alert('ID EMPTY!');
        location.replace('login.php');
        </script>";
    } else if(empty($user_pass)){
        header("location:sign.php?error=Pass Empty");
        exit();
    } else{ //로그인 코딩
        $sql = "SELECT * FROM member WHERE id='$user_id'";
        $result = mysqli_query($db, $sql);

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result); //관계된 무언가를 가져와
            $pw = $row['pass'];

            if(password_verify($user_pass, $pw)){   //확인(입력 값 vs 해쉬코드)
                header("location:../board/index.php");
                exit();
            }else{
                header("location:login.php?error=알수없는 오류 발생!");
                exit();            
            }
        }
    }
}else{
    header("location:login.php?error=알수없는 오류 발생!");
    exit();
}

?>