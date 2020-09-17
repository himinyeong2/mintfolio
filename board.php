<?php

include('dbcon.php');

$select_stmt = $con->prepare("SELECT * FROM Board ");
$select_stmt->execute();
$result = $select_stmt->fetchAll(PDO::FETCH_ASSOC);
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="nav">
        <a class="my-ficture">
            <img src="image/flower.jpg">
        </a>
        <a href="zzz.php" id="id-home">HOME</a>
        <a href="zzz.php" id="id-about-me">ABOUT ME</a>
        <a href="zzz.php" id="id-experiences">EXPERIENCES</a>
        <a href="board.php" id='id-board'>BOARD</a>
    </div>
    <div id=content>
        <div id="board">
            <div class="title">게시판</div>
            <div class="board-table">
                <table>
                    <tr class="column-name">
                        <td>글번호</td>
                        <td>카테고리</td>
                        <td>제목</td>
                        <td>작성자</td>
                        <td>날짜</td>
                        <td>조회수</td>
                    </tr>
                    <?php 
                        for($i=0;$i<sizeof($result);$i++){
                            echo "<tr id=".$result[$i]['dno']."><td>".$result[$i]['dno']."</td><td>".$result[$i]['category']."</td><td><a href='write.php?dno=".$result[$i]['dno']."'>".$result[$i]['title']."</a></td><td>".$result[$i]['writer']."</td><td>".$result[$i]['date']."</td><td>".$result[$i]['views']."</td></tr>";
                        }
                    ?>
                </table>
                <button id="id-write-button" class="board-btn" >글 쓰러 가기</button>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>