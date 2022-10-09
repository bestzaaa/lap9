<?php
 $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8","root","");
 $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

 $stmt = $pdo -> prepare("SELECT * FROM member WHERE username = ?");
 $stmt -> bindParam(1,$_GET["username"]);
 $stmt -> execute();
 $row = $stmt->fetch();
 ?>

 <html>
    <head><meta charset="UTF-8"></head>
    <body>
        <form action="editmember.php" method="post">
            <input type="hidden" name="username" value="<?=$row["username"]?>"><br>
            ชื่อสมาชิก: <input type="text" name="name" value="<?=$row["name"]?>"><br>
            ที่อยู่: <br>
            <textarea name="address" cols="40" rows="3"><?=$row["address"]?></textarea><br>
            อีเมลล์: <input type="text" name="email" value="<?=$row["email"]?>"><br>
            <input type="submit" value="แก้ไขสินค้า">
        </form>
    </body>
</html>