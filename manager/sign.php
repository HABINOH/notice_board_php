<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    <form action="sign_result.php" method="post">
    <h2> 회원가입 </h2>
    <?php if(isset($_GET['error'])) { ?>
        <p>class="error" <?php echo $_GET['error']; ?> </p>
    <?php }?> 
    <?php if(isset($_GET['success'])) { ?>
        <p>class="success" <?php echo $_GET['success']; ?> </p>
    <?php }?> 
    
    <p>
        <lable for="nik">NICK NAME : </lable>  
        <input type="text" name="user_nik">
    </p>
    <p>
        <lable for="ID">ID : </lable>  
        <input type="text" name="user_id">
    </p>
    <p>
        <lable for="PASSWORD">PASSWORD : </lable>  
        <input type="password" name="user_pass">
    </p>
    <p>
        <lable for="PASSWORD">CHECK PASS : </lable>  
        <input type="password" name="user_pass2">
    </p>
    <button type="submit"> 회원가입 완료 </button>
    <a href="login.php"> 로그인 페이지로 이동 </a>
    



</body>
</html>