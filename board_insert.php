<?php
include 'nav.php';
?>
    <div id=content>
        <div id="write">
            <div class="write-in">
                <div class="title">글 쓰기</div>
                <div class="write-row">
                    <div class="write-row-in">
                        <label class="write-row-label">카테고리</label>
                        <select id="id-write-category" class="input-text write-select-box">
                            <option default="default">선택</option>
<<<<<<< HEAD
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
=======
                            <option>STUDY</option>
                            <option>WOKR DIARY</option>
                            <option>Q&A</option>
>>>>>>> cd7681403ba5af82614a9e4e601107175b54f85f
                        </select>
                        <label class="write-row-label">이름</label>
                        <input type="text" id="id-write-name" class="input-text write-text-field name-text-field">
                    </div>
                    <div class="write-row-in">
                        <label class="write-row-label">비밀번호</label>
                        <input type="password" id="id-write-pw" class="input-text write-text-field pw-text-field">
                    </div>
                </div>
                <div class="write-row">
                    <label class="write-row-label">제목</label>
                    <input type="text" class="input-text write-text-field title-text-field"  id="id-write-title">
                </div>
                <div class="write-row">
                    <textarea class="input-text write-text-field textarea-field" id="id-write-textarea"></textarea>
                </div>
                <div class="write-row">
                    <button id="id-board-insert" class="input-text write-insert-btn"> 입력</button>
                </div>
                
            </div>
        </div>
    </div>
   
    <script type="text/javascript" src="js/insert_board.js"></script>
</body>

</html>