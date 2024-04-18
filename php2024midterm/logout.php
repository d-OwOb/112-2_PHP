<?php
session_start();
$_SESSION["char"] = "none";
?>

<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登出</title>
</head>

<body>
    <div>您已登出</div>
</body>

</html>

<?php
require "include.inc";
header("Refresh:2;url=./index.php");

?>