<?php
        $conn = mysqli_connect("localhost:3307", "root", "105564", "abc_corp");
        if(!$conn){
            echo 'db에 연결하지 못했습니다.'.mysqli_connect_error();
        }else{
            echo 'db에 접속했습니다.';
        }
        //msg_board 테이블에서 글 조회
        //SELECT * FROM 테이블명
        $view_num = $_GET['number'];
        $sql = "SELECT * FROM msg_board WHERE number = $view_num";
        $result = mysqli_query($conn, $sql);
        
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view - abc 게시판</title>
</head>
<body>
    <h1>게시판</h1>
    <h2>글 내용</h2>
    <?php
        if($row = mysqli_fetch_array($result)){    
    ?>
    <h3>글번호 : <?= $row['number'] ?> / 글쓴이 : <?= $row['name'] ?></h3>
    <div>
        <?= $row['message'] ?>
    </div>
    <?php  }  mysqli_close($conn); ?>
    
    <p><a href="index.php">메인화면으로 돌아가기</p>
    <p><a href="update.php?number=<?= $row['number']?>">수정하기</p>
</body>
</html>