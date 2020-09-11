<?php

//클릭한 날의 id가 존재하면 show- diary에 보여주기 + edit, 

$data = "sibar";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINTFOLIO</title>
    <link href="css/calendar_style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="header">
        <div class="card-header">
            <div class="title">Mintfolio</div>
            <div class="header-nav">
                <a href="index.php">메인</a>
                <a href="calendar.php">일기</a>
                <a href="introduce.php">소개</a>
                <a href="#">문의</a>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="calendar-diary">
            <div class="calendar-img">
                <img class="calendar-png" src="image/calendar.png" >
                <div class="calendar">
                    <div class="calendar-nav">
                        <span id="prev">◁</span>
                        <span id="current-year-month">2020-9</span>
                        <span id="next">▷</span>
                    </div>
                    <table id="id-calendar"class="calendar-table">
                        <tr id="week-name">
                        <td>SUN</td>
                        <td>MON</td>
                        <td>TUE</td>
                        <td>WED</td>
                        <td>THU</td>
                        <td>FRI</td>
                        <td>SAT</td>
                        </tr>
                        <tr id="week-1"></tr>
                        <tr id="week-2"></tr>
                        <tr id="week-3"></tr>
                        <tr id="week-4"></tr>
                        <tr id="week-5"></tr>
                        <tr id="week-6"></tr>
                    </table>
                </div>
            </div>
           
            <div id="id-postit" class="postit-img">
                <img src="image/postit.png">
                <div id="show-diary" class="diary">
                    <div id="id-diary-date" class="diary-date">
                    </div>
                    <div class="diary-fold">
                        <button id="btn-diary-fold">x</button>
                    </div>
                    <div class="diary-content">
                        <textarea id="diary-text-area" placeholder="일기를 기록하세요" cols="20" rows="6" pla></textarea>
                    </div>
                    <div class="diary-button">
                    <input type="submit" id="id-diary-delete" name="diary-delete" value="DELETE" >
                    <input type="submit" id="id-diary-edit" name="diary-edit" value="EDIT"  >
                        <input type="submit" id="id-diary-save" name="diary-save" value="SAVE">
                        
                        
                    </div>
            </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="js/calendar.js"></script>
    <script type="text/javascript" src="js/send_test.js"></script>
    <script  src="http://code.jquery.com/jquery-latest.min.js"></script>
</body>

</html>