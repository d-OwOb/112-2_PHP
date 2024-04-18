<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
</head>

<body>
    <H1>240418PHP期中考--論文投稿系統</H1>
    <form action="check.php" method="post">
        <span>請選擇角色</span>
        <select name="char" id="">
            <option value="chair">Chair</option>
            <option value="reviewer">Reviewer</option>
            <option value="author">Author</option>
        </select>
        <?php
        if (isset($_COOKIE["lastLogin"])) {
            $info = $_COOKIE["lastLogin"];
        } else {
            $info = "";
        }
        echo "
                <span>帳號</span><input type='text' name='Acc' value = '$info' >
            ";
        ?>
        <span>密碼</span><input type="password" name="pass">
        <input type="submit">

    </form>
    <?php
    require "include.inc";
    ?>
</body>

</html>