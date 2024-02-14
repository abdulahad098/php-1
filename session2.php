<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
echo "student name is:".$_SESSION["name"]."<br>";
echo "student pass is:".$_SESSION["pass"]
?>

</body>
</html>
