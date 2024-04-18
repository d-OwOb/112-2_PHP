<?php
session_start();
if ($_SESSION["char"] != "author") {
    echo "非法進入";
    header("Refresh:2;url=./index.php");
} else {
    if (!isset($_POST["title"])) {
        $_POST["title"] = "無";
    }
    if (!isset($_POST["Aname"])) {
        $_POST["Aname"] = "無";
    }
    if (!isset($_POST["Amail"])) {
        $_POST["Amail"] = "無";
    }
    if (!isset($_POST["content"])) {
        $_POST["content"] = "無";
    }

    echo "論文標題 : " . strip_tags($_POST["title"]) . "<br>";
    echo "作者姓名 : " . strip_tags($_POST["Aname"]) . "<br>";
    echo "作者Email : " . strip_tags($_POST["Amail"]) . "<br>";
    echo "論文摘要 : " . strip_tags($_POST["content"]) . "<br>";
    echo "
    <form action='logout.php'>
        <input type='submit' value='登出'>
    </form>
    ";
    require "include.inc";
}
?>
