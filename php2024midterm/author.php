<?php
session_start();
if ($_SESSION["char"] != "author") {
    echo "非法進入";
    header("Refresh:2;url=./index.php");
} else {
    $char = $_SESSION["char"];
    echo "
        <!DOCTYPE html>
        <html lang='zh-tw'>

        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>author</title>
        </head>

        <body>
            <H1>$char 你好,歡迎進入論文投稿網頁</H1>
            <form action='./showpaper.php' method='post'>
                <span>論文標題 : </span><input type='text' name='title' required><br>
                <span>作者姓名 : </span><input type='text' name='Aname' required><br>
                <span>作者E-mail : </span><input type='text' name='Amail' required><br>
                <span>論文摘要 : </span><textarea name='content' cols='30' rows='10' required></textarea><br>
                <input type='submit'>
            </form>
            <form action='logout.php'>
                <input type='submit' value='登出'>
            </form>
        </body>
        </html>
        ";

    require "include.inc";
}
?>