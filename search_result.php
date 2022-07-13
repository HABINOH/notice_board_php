<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>abc 게시판</title>
</head>
<body>
    <h1>게시판</h1>
    <h2>검색 결과</h2>
    <ul>
    <?php
        $conn = mysqli_connect("localhost:3307", "root", "105564", "abc_corp");
        if(!$conn){
            echo 'db에 연결하지 못했습니다.'.mysqli_connect_error();
        }else{
            echo 'db에 접속했습니다.';
        }
        //msg_board 테이블에서 글 조회
        //SELECT * FROM 테이블명
        $user_skey = $_POST['skey'];

        $sql = "SELECT * FROM msg_board WHERE message LIKE '%$user_skey%'";
        $result = mysqli_query($conn, $sql);
        $list = '';
        
        while($row = mysqli_fetch_array($result)){
            $list = $list."<li>{$row['number']}:<a href=\"view.php?number={$row
                ['number']}\">{$row['name']}</a></li>";
        }echo $list;
        mysqli_close($conn);
    ?>
    </ul>
    <p><a href="index.php">메인화면으로 돌아가기</p>
</body>
</html>