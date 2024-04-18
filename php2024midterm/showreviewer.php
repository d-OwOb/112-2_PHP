<?php
session_start();
if ($_SESSION["char"] != "reviewer") {
    echo "非法進入";
    header("Refresh:2;url=./index.php");
} else {
    if (!isset($_POST["adv"])) {
        $_POST["adv"] = "123";
    }

    echo "論文評審決定為 : " . $_POST["result"] . "<br>";
    echo "論文評語為 : " . strip_tags($_POST["adv"]);
    echo "
    <form action='logout.php'>
        <input type='submit' value='登出'>
    </form>
    ";
    require "include.inc";
}
?>