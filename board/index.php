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
    <h2>글 목록</h2>
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
        $sql = "SELECT * FROM msg_board";
        $result = mysqli_query($conn, $sql);
        $list = '';
        //echo 값을 그대로 출력
        //print 값을 그대로 출력
        //print_r 배열, 객체 모양을 그대로 출력
        //var_dump print_r보다 더 상세하게 출력
        
        while($row = mysqli_fetch_array($result)){
            $list = $list."<li>{$row['number']}:<a href=\"view.php?number={$row
                ['number']}\">{$row['name']}</a></li>";
        }echo $list;
    ?>
    </ul>
    <hr>
    <p><a href="write.php">글쓰기</a></p>
    <hr>
    <h2>글 검색</h2>
    <form action="search_result.php" method="post">
        <h3>검색할 키워드를 입력하세요.</h3>
        <p>
            <label for="search">키워드 : </label>
            <input type="text" id="search" name="skey">
        </p>
        <input type="submit" value="검색">
    </form>
    <hr>
    <h2>글 삭제</h2>
    <form action="delete.php" method="post">
        <h3>삭제</h3>
        <p>
            <label for="msgdel">번호 : </label>
            <input type="text" id="msgdel" name="delnum">
        </p>
        <input type="submit" value="삭제">
    </form>
       <a href="../manager/logout.php">LOGOUT</a>
</body>
</html>
