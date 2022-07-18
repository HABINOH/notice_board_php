<?php
include('db.php');
if(isset($_POST['user_id']) && isset($_POST['user_pass']) 
&& isset($_POST['user_nik'])  && isset($_POST['user_pass2'])){
    //보안 코딩
    $user_id = mysqli_real_escape_string($db, $_POST['user_id']);
    $user_nik = mysqli_real_escape_string($db, $_POST['user_nik']);
    $user_pass = mysqli_real_escape_string($db, $_POST['user_pass']);
    $user_pass2 = mysqli_real_escape_string($db, $_POST['user_pass2']);

    if(empty($user_nik)){
        echo "<script>
        alert('Nick Name EMPTY!');
        history.back();
        </script>";
    } else if(empty($user_id)){
        echo "<script>
        alert('ID EMPTY!');
        location.replace('sign.php');
        </script>";
    } else if(empty($user_pass)){
        header("location:sign.php?error=Pass Empty");
        exit();
    } else if(empty($user_pass2)){
        header("location:sign.php?error=Check Pass Empty");
        exit();
    } else if($user_pass != $user_pass2){
        header("location:sign.php?error=Password mismatch!!");
        exit();        
    } else{
        //암호화(양방향md5, 단방향hash)
        //$md5 = md5($user_pass);
        $hash = password_hash($user_pass, PASSWORD_DEFAULT);

        //중복체크
        $sql_same = "SELECT * FROM member WHERE id='$user_id' and nik='$user_nik'";
        $order = mysqli_query($db, $sql_same);
        if(mysqli_num_rows($order) > 0){
            header("location:sign.php?error=아이디 또는 닉네임이 사용 중입니다.");
            exit();
        }else{ //저장
            $sql_save = "INSERT INTO member(nik, id, pass) VALUES('$user_nik', '$user_id', '$hash')";
            $result = mysqli_query($db, $sql_save);

            if(isset($result)){
                echo "<script>
                alert('회원가입 완료!');
                location.replace('login.php');
                </script>";
            }else{
                header("location:sign.php?error=회원가입 실패!");
                exit();
            }
        }
    }
}else{
    header("location:sign.php?error=알수없는 오류 발생!");
    exit();
}

?>