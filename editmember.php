<?php
 $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8","root","");
 $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

 $stmt = $pdo -> prepare("UPDATE member SET name=?, address=?, email=? WHERE username=? ");
 $stmt -> bindParam(1,$_POST["name"]);
 $stmt -> bindParam(2,$_POST["address"]);
 $stmt -> bindParam(3,$_POST["email"]);
 $stmt -> bindParam(4,$_POST["username"]);
 if ($stmt -> execute())
    echo"แก้ไขสมาชิก " .$_POST["name"]." สำเร็จ";
 ?>