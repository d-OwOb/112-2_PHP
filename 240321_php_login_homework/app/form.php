<!DOCTYPE html>
<html lang="zh-tw">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>240314_資管晚會報名表</title>
</head>

<body>
    <header id="header">
        <div id="title">2024資管晚會報名表</div>
    </header>
    <div class="container">

        <div class="main-form">
            <?php
            if (isset($_SESSION["login"]) && $_SESSION["login"] == true) {
                $uid = $_SESSION["uId"];
                echo "            <form action='result.php' method='post'>
                <div class='form-row' id='stuId-row'>
                    <span class='note-text'>您的學號</span>
                    <div class='input-area-div'><input type='text' name='stuId' class='input-area' id='stuId-input-area'
                            value='$uid' required></div>
                </div>
                <div class='form-row' id='stuName-row'>
                    <span class='note-text'>您的姓名</span>
                    <div class='input-area-div'><input type='text' name='stuName' class='input-area'
                            id='stuName-input-area' required></div>
                </div>
                <div class='form-row' id='gender-row'>
                    <span class='note-text' id='gender-text'>性別</span>
                    <div class='checkbox-area-div'>
                        <input type='radio' name='gender' class='checkbox-area' value='男'><span>男</span><input
                            type='radio' name='gender' class='checkbox-area' value='女'><span>女</span><input type='radio'
                            name='gender' class='checkbox-area' value='不願透露' checked><span>不願透露</span>
                    </div>
                </div>
                <div class='form-row' id='plan-row'>
                    <span class='note-text' id='plan-text'>方案選擇</span>
                    <div class='plan-area-div'>
                        <select name='plan' id='plan-select-area'>
                            <option value='01'>01.調酒兌換券x2+飲品暢飲 (NT 500)</option>
                            <option value='02'>02.飲品暢飲 (NT 300)</option>
                            <option value='03'>03.無須飲品(NT 150)</option>
                        </select>
                    </div>
                </div>
                <div class='form-row' id='Email-row'>
                    <span class='note-text'>Email</span>
                    <div class='input-area-div'><input type='Email' name='stuMail' class='input-area'
                            id='stuMail-input-area' required></div>
                </div>
                <div class='form-row last-row' id='adv-row'>
                    <span class='note-text'>想說的話</span>
                    <div class='advice-area-div'><textarea name='adv' id='adv-input-area' cols='8' rows='10'></textarea>
                    </div>
                </div>
                <div class='form-row btn-row'>
                    <input id='submit-btn' class='btn' type='submit' value='送出報名'>
                    <input id='reset-btn' class='btn' type='reset' value='清除資料'>
                </div>
            </form>
                ";
            }else{
                echo "<div class='text fail-note'>未登入，將跳轉至登入頁</div>";
                header("Refresh:2;url=./login.php");
            }
            ?>

        </div>
    </div>
</body>

</html>