<?php
 $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8","root","");
 $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

 $stmt = $pdo -> prepare("INSERT INTO member VALUES(?,?,?,?,?,?) ");
 $stmt -> bindParam(1,$_POST["username"]);
 $stmt -> bindParam(2,$_POST["password"]);
 $stmt -> bindParam(3,$_POST["name"]);
 $stmt -> bindParam(4,$_POST["address"]);
 $stmt -> bindParam(5,$_POST["mobile"]);
 $stmt -> bindParam(6,$_POST["email"]);
 $stmt -> execute();

 $pid = $pdo -> lastInsertId();
 ?>

 <html>
    <head><meta charset="UTF-8"></head>
    <body>
       <h1>username: <?=$_POST["username"]?></h1><br>
        ชื่อ: <?=$_POST["name"]?><br>
        ที่อยู่: <?=$_POST["address"]?><br>
        เบอร์โทรศัพท์: <?=$_POST["mobile"]?><br>
        อีเมลล์: <?=$_POST["email"]?><br>
    </body>
</html>
