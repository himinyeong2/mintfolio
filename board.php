<?php

include('dao/getBoard.php');
include('dao/paging.php');
if(isset($_GET['page'])){
    $curPage =$_GET['page'];
}else{
    $curPage=1;
}
if(isset($_GET['category'])){
    $curCategory =$_GET['category'];
}else{
    $curCategory =null;
}
include "nav.php";

?>
<div id=content>
    <div id="board">
        <div class="board-in">
            <div class="title board-title">BOARD</div>
            <div id="board-table"class="board-table">
                <select id="id-board-category" class="input-text write-select-box">
                    <option></option>
                    <option value="STUDY">STUDY</option>
                    <option value="WORK_DIARY">WORK_DIARY</option>
                    <option value="QnA">Q&A</option>
                </select>
                <button id="id-board-search" class="board-btn">SEARCH</button>
                <table id="id-board" class="iframe-board-table" >
                    <tr class="column-name">
                        <td>글번호</td>
                        <td>카테고리</td>
                        <td>제목</td>
                        <td>작성자</td>
                        <td>날짜</td>
                        <td>조회수</td>
                    </tr>
                    <?php 
                        $array = paging(null);
                        $size=$array[0];
                        $result = $array[1];
                        for($i=0;$i<sizeof($result);$i++){
                            echo "<tr id=".$result[$i]['dno']."><td>".$result[$i]['dno']."</td><td>".$result[$i]['category']."</td><td><a href='show-board.php?dno=".$result[$i]['dno']."'>".$result[$i]['title']."</a></td><td>".$result[$i]['writer']."</td><td>".$result[$i]['date']."</td><td>".$result[$i]['views']."</td></tr>";
                        }
                        // for($i=0;$i<sizeof($result);$i++){
                        //     echo "<tr id=".$result[$i]['dno']."><td>".$result[$i]['dno']."</td><td>".$result[$i]['category']."</td><td>".$result[$i]['title']."</td><td>".$result[$i]['writer']."</td><td>".$result[$i]['date']."</td><td>".$result[$i]['views']."</td></tr>";
                        // }
                    ?>
                   </table>

                   <?php
                    if($curCategory==null){
                        $total =  getTotalSize(null);
                    }else{
                        $total = getTotalSize($curCategory);
                    }
                   ?>
                   <div id="id-board-pages" total=<?php echo $total; ?> size=<?php echo $size; ?>>
                   <?php
                        for($i=1;$i<$total/$size+1;$i++){
                            echo "<button class='input-text pages-button' id=id-board-$i-page> $i </button>";
                        }
                    ?>
                    </div>
                </table>
                <button id="id-write-button" class="board-btn">글 쓰러 가기</button>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript" src="js/getPages.js"></script>
<script type="text/javascript" src="js/go_to_write.js"></script>
<script type="text/javascript" src="js/getBoard.js"></script>
</body>

</html>