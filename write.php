<?php

include('dbcon.php');

$dno= $_GET['dno'];

$select_stmt = $con->prepare("SELECT * FROM Board WHERE dno=:dno ");
$select_stmt->bindParam(':dno',$dno);
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
                    <tr>
                        <td> <?php echo $result[0]['date']; ?>  </td>
                    </tr>
                </table>
                <button id="id-write-button" class="board-btn">글 쓰러 가기</button>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>