<?php

<<<<<<< HEAD
include('dao/dbcon.php');

$select_stmt = $con->prepare("SELECT * FROM Board ");
$select_stmt->execute();
$result = $select_stmt->fetchAll(PDO::FETCH_ASSOC);
include "nav.php";
?> 

    <div id=content>
        <div id="board">
            <div class="board-in">
            <div class="title board-title">BOARD</div>
            <div class="board-table">
                <table>
=======
include('dao/getDiary.php');
include('dao/paging.php');
include "nav.php";

?>
<div id=content>
    <div id="board">
        <div class="board-in">
            <div class="title board-title">BOARD</div>
            <div id="board-table"class="board-table">
                <table id="id-board-table">
>>>>>>> cd7681403ba5af82614a9e4e601107175b54f85f
                    <tr class="column-name">
                        <td>글번호</td>
                        <td>카테고리</td>
                        <td>제목</td>
                        <td>작성자</td>
                        <td>날짜</td>
                        <td>조회수</td>
                    </tr>
                    <?php 
<<<<<<< HEAD

=======
                        $result = paging(null);
>>>>>>> cd7681403ba5af82614a9e4e601107175b54f85f
                        for($i=0;$i<sizeof($result);$i++){
                            echo "<tr id=".$result[$i]['dno']."><td>".$result[$i]['dno']."</td><td>".$result[$i]['category']."</td><td><a href='show-board.php?dno=".$result[$i]['dno']."'>".$result[$i]['title']."</a></td><td>".$result[$i]['writer']."</td><td>".$result[$i]['date']."</td><td>".$result[$i]['views']."</td></tr>";
                        }
                    ?>
                </table>
<<<<<<< HEAD
                <button id="id-write-button" class="board-btn" >글 쓰러 가기</button>
            </div>
        </div>
                    </div>
    </div>
    <script type="text/javascript" src="js/go_to_write.js"></script>
=======
                <div id="id-board-pages" size=<?php echo sizeof($result); ?>>
                    <?php
                        for($i=1;$i<sizeof($result)/3+1;$i++){
                            echo "<button id=id-board-$i-page> $i </button>";
                        }
                    ?>
                </div>
                <button id="id-write-button" class="board-btn">글 쓰러 가기</button>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript" src="js/getPages.js"></script>
<script type="text/javascript" src="js/go_to_write.js"></script>
>>>>>>> cd7681403ba5af82614a9e4e601107175b54f85f
</body>

</html>