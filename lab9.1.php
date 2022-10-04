<?php include "connect.php" ?>

<html>
<head><meta charset="utf-8">
<script>
function confirmDelete(username) {
    var ans = confirm("ต้องการลบสมาชิก" + username);
    if (ans==true)
        document.location = "delete.php?username=" + username;
}
</script>
</head>
<body>
<?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();

    while($row = $stmt->fetch()){
        echo "username :".$row["username"]."<br>";
        echo "password:".$row["password"]."<br>";
        echo "ชื่อสมาชิก :".$row["name"]."<br>";
        echo "ที่อยู่ :".$row["address"]."<br>";
        echo "เบอร์โทรศัพท์ :".$row["mobile"]."<br>";
        echo "อีเมล :".$row["email"]."<br>";
        echo "<a href='#' onclick=confirmDelete('".$row["username"]."')>ลบ</a>";
        echo "<hr>\n";
    }
?>
</body>
</html>
       
    