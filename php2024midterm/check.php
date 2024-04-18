<?php
session_start();
$Acc = $_POST["Acc"];
$pass = $_POST["pass"];
$char = $_POST["char"];
$Acc01 = "chair";
$pass01 = "123";
$Acc02 = "reviewer";
$pass02 = "234";
$Acc03 = "author";
$pass03 = "345";

if (isset($Acc) && isset($pass)) {
    $date = strtotime("+ 7 days", time());
    if ($Acc == $Acc01 && $pass == $pass01 && $char == "chair") {
        echo "進入";
        $_SESSION["char"] = "chair";
        setcookie("lastLogin", $Acc01, $date);

        header("Location:chair.php");
    } elseif ($Acc == $Acc02 && $pass == $pass02 && $char == "reviewer") {
        $_SESSION["char"] = "reviewer";
        setcookie("lastLogin", $Acc02, $date);


        header("Location:reviewer.php");
    } elseif ($Acc == $Acc03 && $pass == $pass03 && $char == "author") {
        $_SESSION["char"] = "author";
        setcookie("lastLogin", $Acc03, $date);
        header("Location:author.php");
    } else {
        $_SESSION["char"] = "none";
        setcookie("lastLogin", "", $date);


        header("Location:./fail.php");
    }
} else {
    $_SESSION["char"] = "none";
    setcookie("lastLogin", "", $date);


    header("Location:./fail.php");
}
?>