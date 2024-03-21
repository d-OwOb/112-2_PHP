<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login_style.css">
    <script src="../js/script.js" defer></script>
    <title>230321_資管晚會報名表-登入</title>
</head>

<body>
    <header id="header">
        <div id="title">2024資管晚會報名表</div>
    </header>

    <div class="container">
        <div id="login-base">
            <div class="title-area text">登入以報名</div>
            <div class="login-input-area">
                <form action="check.php" method="POST">
                    <div class="input-row">
                        <span class="note-text">學號 : </span>
                        <div class="input-area-div"> <input class="input-area" type="text" name="uId" required></div>
                    </div>
                    <div class="input-row">
                        <span class="note-text">密碼 : </span>
                        <div class="input-area-div"> <input id="pass-input" class="input-area" type="password" name="uPass"
                                required><span id="passCtrl" class="passVisCtrl"></span></div>
                    </div>
                    <div class="space"></div>
                    <div class="input-row">
                        <input id="submit-btn" class="btn" type="submit" value="登入">
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>

</html>