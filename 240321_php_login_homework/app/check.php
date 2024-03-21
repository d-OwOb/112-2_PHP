<meta charset="utf-8">
<style>
    * {
        margin: 0px;
        padding: 0px;
        font-size: 36px;
    }
</style>
<?php
session_start();

$uId = $_POST["uId"];
$uPass = $_POST["uPass"];

$userlist = array(
    "A1113399" => "anypass",
    "A1113398" => "qwerty",
    "A1113397" => "123456789",
    "A1113396" => "OwOb",
);

if (isset ($userlist[$uId]) && $userlist[$uId] == $uPass) {
    $_SESSION["login"] = true;
    $_SESSION["uId"] = $uId;
    echo " 登入成功";
    header("Refresh:1;url=./form.php");
} else {
    $_SESSION["login"] = false;
    echo "登入失敗 2秒後回到登入頁";
    header("Refresh:2;url=login.php");
}
?>