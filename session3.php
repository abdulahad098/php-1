<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    session_unset();
    session_destroy();

    echo "session is destroyed";
    ?>
</body>
</html>