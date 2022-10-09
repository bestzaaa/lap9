<html>
<head><meta charset="utf-8">
<script>
    function confirmDelete(username)
    {
        var ans = confirm("ต้องการลบ"+ username +"หรือไม่");
        if(ans==true)
           document.location = "deleteform.php?username="+ username;
    }
</script>
</head>
<body>
    <?php
    $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $stmt = $pdo->prepare("SELECT * FROM member");
      $stmt->execute();

      while($row = $stmt->fetch()){
        ?>
        ชื่อสมาชิก: <?= $row["name"] ?> <br>
        ที่อยู่: <?= $row["name"] ?> <br>
        อีเมลล์: <?= $row["name"] ?> <br>
        <a href='deleteform.php?username=<?=$row["username"]?>' onclick='confirmDelete(".$row["username"].")'>ลบ</a>
        <hr>
        <?php
      }
    ?>


</body>
</html>