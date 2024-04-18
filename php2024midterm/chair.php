<?php
session_start();
if ($_SESSION["char"] != "chair") {
    echo "非法進入";
    header("Refresh:2;url=./index.php");
} else {
    echo "
        <!DOCTYPE html>
            <html lang='zh-tw'>

            <head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <title>chair</title>
            </head>

            <body>
                <div>這頁是chair.php</div>
                <form action='logout.php'>
                    <input type='submit' value='登出'>
                </form>
            </body>

            </html>
        ";
    require "include.inc";
}
?>
