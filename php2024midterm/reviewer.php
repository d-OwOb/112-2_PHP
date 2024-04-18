<?php
session_start();
if ($_SESSION["char"] != "reviewer") {
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
                <title>reviewer</title>
            </head>

            <body>
                <H1>$char 你好,歡迎進入論文評論網頁</H1>
                <form action='showreviewer.php' method='post'>
                    <span>論文評審決定 :</span>
                    <input type='radio' name='result' value='accept'>Accept
                    <input type='radio' name='result' value='minor'>Minor Revision
                    <input type='radio' name='result' value='major'>Major Revision
                    <input type='radio' name='result' value='reject' checked>Reject
                    <br>
                    <span>論文評論評語 : </span><textarea name='adv' cols='20' rows='10'></textarea>
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
