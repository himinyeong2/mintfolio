<?php
include 'nav.php';
include 'dao/dbcon.php';
$dno=$_GET['dno'];
$select_stmt = $con->prepare("SELECT * FROM Board WHERE dno=:dno");
$select_stmt->bindParam(':dno',$dno);
$select_stmt->execute();
$result = $select_stmt->fetchAll(PDO::FETCH_ASSOC);
?>
    <div id=content>
        <div id="write">
            <div class="write-in">
                <div class="title">글 쓰기</div>
                <div class="write-row">
                    <div class="write-row-in">
                        <label class="write-row-label" >카테고리</label>
                        <select id="id-write-category" class="input-text write-select-box"  disabled="disabled">
                            <option default="default">선택</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                        <label class="write-row-label">이름</label>
                        <input type="text" id="id-write-name" class="input-text write-text-field name-text-field" disabled="disabled" value=<?php echo $result[0]['writer']; ?>>
                    </div>
                    <div class="write-row-in">
                        <label class="write-row-label" >비밀번호</label>
                        <input type="password" id="id-write-pw" class="input-text write-text-field pw-text-field" disabled="disabled" value=<?php echo $result[0]['pw']; ?> >
                    </div>
                </div>
                <div class="write-row">
                    <label class="write-row-label" >제목</label>
                    <input   type="text" class="input-text write-text-field title-text-field"  id="id-write-title" disabled="disabled" value=<?php echo $result[0]['title']; ?>>
                </div>
                <div class="write-row">
                    <textarea   class="input-text write-text-field textarea-field" id="id-write-textarea" disabled="disabled" ><?php echo $result[0]['contents'] ;?></textarea>
                </div>
                <div class="write-row">
                    <button id="id-edit" class="input-text write-edit-btn">EDIT</button>
                    <button id="id-board-edit" class="input-text write-edit-btn">GO TO EDIT</button>
                    <button id="id-board-delete" class="input-text write-edit-btn">GO TO DELETE</button>
                </div>
                
            </div>
        </div>
    </div>
   
    <script type="text/javascript" src="js/show-board.js"></script>
</body>

</html>