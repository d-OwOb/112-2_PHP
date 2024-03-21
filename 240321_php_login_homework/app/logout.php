<meta charset="utf-8">
<style>
    *{
        margin: 0px;
        padding: 0px;
        font-size: 48px;
    }
</style>
<?php
session_start();
session_destroy();
echo "登出成功";
header("Refresh:1;url=login.php");
?>