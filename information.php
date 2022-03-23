<html>
    <head>
        <title>註冊資訊</title>
    </head>
    <body>
    <?php
    echo "<h1>"."註冊資訊"."</h1>"."<br>";
    $userid=$_GET["userid"];
    echo "<h3>"."帳號：".$userid."</h3>"."<br>";
    $password=$_GET["password"];
    echo "<h3>"."密碼：".$password."</h3>"."<br>";
    $email=$_GET["email"];
    echo "<h3>"."Email：".$email."</h3>"."<br>";
    $phone=$_GET["phone"];
    echo "<h3>"."電話：".$phone."</h3>"."<br>";
    
?>
    <input type ="button" onclick="javascript:location.href='index.php'" value="確定"></input>
    <input type ="button" onclick="javascript:location.href='sign_up.php'" value="重設"></input>
    </body>
</html>

