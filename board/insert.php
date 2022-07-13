<?php

$conn = mysqli_connect("localhost:3307", "root", "105564", "abc_corp");
if(!$conn){
    echo 'db에 연결하지 못했습니다.'.mysqli_connect_error();
}else{
    echo 'db에 접속했습니다.';
}

$user_name=$_POST['name'];
$user_msg=$_POST['message'];

$sql = "INSERT INTO msg_board (name, message) VALUES('$user_name', '$user_msg')";
//mysqli_query($connect 변수, 'sql statement')
$result = mysqli_query($conn, $sql);

if($result === false){
    echo '저장하지 못하였습니다.';
    error_log(mysqli_error($conn)); //에러 로그 기록
}else{
    echo '저장 성공';
}

mysqli_close($conn);
print "<hr/><a href='index.php'>메인화면으로 이동하기</a>";

?>