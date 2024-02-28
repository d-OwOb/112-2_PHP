<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 10px 5px;
        }

        .php-text {
            text-decoration: none;
            display: inline-block;
            color: red;
            font-size: 56px;
            font-weight: 700;
            padding: 10px 20px;
            border: 2px solid cyan;

        }

        .php-text:hover {
            background-color: red;
            border: 0px;
            color: #FFF;
            cursor: pointer;
        }
    </style>
    <title>240222_PHP作業</title>
</head>

<body>
    <h1 class="main-title">這是一個簡單的PHP網頁</h1>
    <h3 class="php-block">↓↓↓↓下面使用php echo產生</h3>

    <?php
    echo "<a href=\"#\" class=\"php-text\">這個是php區塊中的文字</a>";
    ?>

</body>

</html>