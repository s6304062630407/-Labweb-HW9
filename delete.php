<?php include "connect.php"?>
<?php
    $stmt = $pdo->prepare("DELETE FROM member WHERE username=?");
    $stmt->bindParam(1,$_GET["username"]);
    if($stmt->execute())
        header("location: lab9.1.php");
?>