<?php

$conn = mysqli_connect("localhost:3307", "root", "105564", "abc_corp");
if(!$conn){
    echo 'db에 연결하지 못했습니다.'.mysqli_connect_error();
}else{
    echo 'db에 접속했습니다.';
}

$number=$_POST['number'];
$user_name=$_POST['name'];
$user_msg=$_POST['message'];

$sql = "UPDATE msg_board SET name = '$user_name', message = '$user_msg' WHERE number = '$number'";
$result = mysqli_query($conn, $sql);

if($result === false){
    echo '수정하지 못하였습니다.';
    error_log(mysqli_error($conn)); //에러 로그 기록
}else{
    echo '수정 성공';
}

mysqli_close($conn);
print "<hr/><a href='index.php'>메인화면으로 이동하기</a>";

?>
