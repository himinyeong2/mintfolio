<?php
include('dao/getBoard.php');
include('dao/paging.php');
$curPage =$_GET['page'];
$curCategory =$_GET['category'];
?>
<link href="css/style.css" rel="stylesheet" type="text/css">
<div class="table-in-iframe" style="width:100%; height:100%;" >
        <table id="id-board" class="iframe-board-table" style="width:100% height:auto;" >
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
                        // for($i=0;$i<sizeof($result);$i++){
                        //     echo "<tr id=".$result[$i]['dno']."><td>".$result[$i]['dno']."</td><td>".$result[$i]['category']."</td><td><a href='show-board.php?dno=".$result[$i]['dno']."'>".$result[$i]['title']."</a></td><td>".$result[$i]['writer']."</td><td>".$result[$i]['date']."</td><td>".$result[$i]['views']."</td></tr>";
                        // }
                        for($i=0;$i<sizeof($result);$i++){
                            echo "<tr id=".$result[$i]['dno']."><td>".$result[$i]['dno']."</td><td>".$result[$i]['category']."</td><td>".$result[$i]['title']."</td><td>".$result[$i]['writer']."</td><td>".$result[$i]['date']."</td><td>".$result[$i]['views']."</td></tr>";
                        }
                    ?>
                   </table>

                   <?php
                    if($curCategory==null){
                        $total =  getTotalSize(null);
                    }else{
                        $total = getTotalSize($category);
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
                   
                    </div>



<script type="text/javascript" src="js/getPages.js"></script>