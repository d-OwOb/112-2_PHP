<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./normalize.css">
    <link rel="stylesheet" href="./style.css">
    <title>240314_資管晚會報名表</title>
</head>

<body>
    <header id="header">
        <div id="title">2024資管晚會報名表</div>
    </header>
    <div class="container">
        <div class="mainArea">
            <div id="status-area">
                <div id="status" class="text">報名成功</div>
                <div id="note" class="text">以下是你的報名資訊</div>
            </div>
            <hr>
            <div id="info-area">
                <div class="info-row">
                    <div class="info-text text note">學號 : </div>
                    <div class="info-text text content">
                        <?php echo $_POST["stuId"] ?>
                    </div>
                </div>
                <div class="info-row">
                    <div class="info-text text note">姓名 : </div>
                    <div class="info-text text content">
                        <?php echo $_POST["stuName"] ?>
                    </div>
                </div>
                <div class="info-row">
                    <div class="info-text text note">性別 : </div>
                    <div class="info-text text content">
                        <?php echo $_POST["gender"] ?>
                    </div>
                </div>
                <div class="info-row">
                    <div class="info-text text note">方案 : </div>
                    <div class="info-text text content">
                        <?php
                        $plan = $_POST["plan"];
                        switch ($plan) {
                            case "01":
                                echo "調酒+飲品無限暢飲";
                                break;
                            case "02":
                                echo "飲品無限暢飲";
                                break;
                            case "03":
                                echo "晚會入場券";
                                break;
                            default:
                                echo "程式有誤，請洽主辦單位";
                                break;
                        }
                        ?>
                    </div>
                </div>
                <div class="info-row">
                    <div class="info-text text note">電郵 : </div>
                    <div class="info-text text content">
                        <?php echo $_POST["stuMail"] ?>
                    </div>
                </div>
                <div class="info-row">
                    <div class="info-text text note">想說的話 : </div>
                    <div class="info-text text content">
                        <?php echo $_POST["adv"] ?>
                    </div>
                </div>
            </div>
            <hr>
            <div class="checkemail">請注意電子郵件裡的繳費說明<br>若未在時限內繳費視為未報名完成</div>  

        </div>

    </div>
</body>

</html>