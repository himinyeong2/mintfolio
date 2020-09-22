
function clickPages(){
    var strArray = this.id.split("-");
    // alert(strArray[2]);
    var thisUrlStr = window.location.href;
    var thisUrl = new URL(thisUrlStr);
    var category = thisUrl.searchParams.get("category");
    if (category==null){
        location.href='./board_content.php?page='+strArray[2];
    }else{
        // alert('./board_content.php?category='+category+'page='+strArray[2]);
        location.href='./board_content.php?category='+category+'&page='+strArray[2];
    }
    // alert(document.getElementById('id-write-category').value);


}

function clickedPageForCategory(category, page){ // 카테고리 별 페이지 출력
    if(category=="WORK DIARY"){
        category="WORK_DIARY";
    }
    document.getElementById('board-frame').setAttribute('src','board_content.php?category='+category+'&page='+page);
}


function getClickedId(){
    parent.window.location.href="show-board.php?dno="+this.id;
}

var boardSize = document.getElementById('id-board-pages').getAttribute('total'); // 사이즈 가져오기
var size = document.getElementById('id-board-pages').getAttribute('size');
var table = document.getElementById('id-board');


for(var i=1;i<=Math.ceil(boardSize/size);i++){
    document.getElementById('id-board-'+i+'-page').addEventListener('click',clickPages);
}
for(var i=1;i<boardSize;i++){
    if(table.rows[i]!=null){
        table.rows[i].addEventListener('click',getClickedId);
    }
}