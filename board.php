<?php

include('dao/getBoard.php');
include('dao/paging.php');
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
                <iframe id="board-frame" class="iframe-test" src="board_content.php"></iframe>
                <button id="id-write-button" class="board-btn">글 쓰러 가기</button>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript" src="js/go_to_write.js"></script>
<script type="text/javascript" src="js/getBoard.js"></script>
</body>

</html>