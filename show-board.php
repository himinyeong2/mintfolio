<?php
include 'nav.php';
include 'dao/getBoard.php';
include 'dao/getComment.php';

$dno=$_GET['dno'];

$result = getBoard($dno);
$comment = getComment($dno);
?>
<div id=content>
    <div id="write"><a href="board.php" class="back-button">BACK</a>
        <div class="write-in">
            <div class="title">글</div>
            <div class="write-row">
                <div class="write-row-in">
                    <label class="write-row-label">카테고리</label>
                    <select id="id-write-category" class="input-text write-select-box" disabled="disabled">
                        <option></option>
                        <option value="STUDY">STUDY</option>
                        <option value="WORK_DIARY">WORK_DIARY</option>
                        <option value="QnA">Q&A</option>
                    </select>
                    <label class="write-row-label">이름</label>
                    <input type="text" id="id-write-name" class="input-text write-text-field name-text-field"
                        disabled="disabled" value="<?php echo $result[0]['writer']; ?>">
                </div>
                <div class="write-row-in">
                    <label class="write-row-label">비밀번호</label>
                    <input type="password" id="id-write-pw" class="input-text write-text-field pw-text-field"
                        disabled="disabled" value="<?php echo $result[0]['pw']; ?>">
                </div>
            </div>
            <div class="write-row">
                <label class="write-row-label">제목</label>
                <input type="text" class="input-text write-text-field title-text-field" id="id-write-title"
                    disabled="disabled" value="<?php echo $result[0]['title']; ?>">
            </div>
            <div class="write-row">
                <textarea class="input-text write-text-field textarea-field" id="id-write-textarea"
                    disabled="disabled"><?php echo $result[0]['contents'] ;?></textarea>
            </div>
            <div class="write-row">
                <button id="id-edit" class="input-text write-edit-btn">EDIT</button>
                <button id="id-board-edit" class="input-text write-edit-btn">GO TO EDIT</button>
                <button id="id-board-delete" class="input-text write-edit-btn">GO TO DELETE</button>
            </div>
            <div id="comment-field">
                <div class="comment-input-field">
                    <div class="comment-input-info">
                        <input id="id-comment-input-name" class="input-text comment-input-name" type="text"
                            placeholder="이름">
                        <input id="id-comment-input-pw" type="password" class="input-text comment-input-pw"
                            placeholder="비밀번호">
                    </div>
                    <textarea id="id-comment-input-textarea" class="input-text comment-input-textarea"></textarea>
                    <button id="id-comment-input-button" class="input-text board-btn comment-input-save">저장</button>
                </div>
                <?php 
                for($i=0;$i<sizeof($comment);$i++){
                    echo '<div id="id-comment-'.$comment[$i]['dno'].'" class="comment-field">
                    <div class="comment-input-field">
                    <div class="comment-info">
                        <label class="comment-name">'.$comment[$i]['name'].'</label>
                        <div class="comment-button">
                            <button id="id-comment-edit-'.$comment[$i]['dno'].'" class="input-text comment-btn comment-edit">수정</button>
                            <button id="id-comment-delete-'.$comment[$i]['dno'].'" class="input-text comment-btn comment-delete">삭제</button>
                            <button id="id-comment-'.$comment[$i]['dno'].'" class="input-text comment-btn comment-comment-btn">댓글달기</button>
                        </div>
                        </div>
                    <textarea id="id-comment-textarea-'.$comment[$i]['dno'].'" class="input-text comment-textarea " disabled>'.$comment[$i]['comment'].'</textarea>
                    </div>
                </div>';
                $data = getCComment($comment[$i]['dno']);
                for($j=0;$j<sizeof($data);$j++){
                    echo '<div id="id-comment-'.$data[$j]['dno'].'" class="comment-comment-field">
                    <div class="comment-input-info">
                    <div class="comment-info">
                        <label class="comment-name">'.$data[$j]['name'].'</label>
                        <div class="comment-button">
                            <button id="id-comment-edit-'.$data[$j]['dno'].'" class="input-text comment-btn comment-edit">수정</button>
                            <button id="id-comment-delete-'.$data[$j]['dno'].'" class="input-text comment-btn comment-delete">삭제</button>
                        </div>
                        </div>
                    <textarea  id="id-comment-textarea-'.$data[$j]['dno'].'" class="input-text comment-textarea " disabled>'.$data[$j]['comment'].'</textarea>
                    </div>
                </div>';
                }
                }
            ?>
            </div>
        </div>
    </div>
</div>
<!-- <div id="id-comment-comment-'.$comment[$i]['dno'].'" class="comment-comment-input-field">
                <div class="comment-input-info">
                    <input id="id-comment-comment-input-name'.$comment[$i]['dno'].'" class="input-text comment-input-name" type="text" placeholder="이름">
                    <input id="id-comment-comment-input-pw'.$comment[$i]['dno'].'" type="password" class="input-text comment-input-pw" placeholder="비밀번호">

                </div>
                <textarea id="id-comment-comment-input-textarea" class="input-text comment-input-textarea"></textarea>
                <button id="id-comment-comment-input-button" class="input-text board-btn comment-input-save">저장</button>
            </div> -->
<script type="text/javascript" src="js/show-board.js"></script>
<script type="text/javascript" src="js/comment.js"></script>
</body>

</html>