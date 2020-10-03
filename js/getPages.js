
function clickPages(){
    var strArray = this.id.split("-");
    // alert(strArray[2]);
    var thisUrlStr = window.location.href;
    var thisUrl = new URL(thisUrlStr);
    var category = thisUrl.searchParams.get("category");
    if (category==null){
        location.href='./board.php?page='+strArray[2];
    }else{
        // alert('./board_content.php?category='+category+'page='+strArray[2]);
        location.href='./board.php?category='+category+'&page='+strArray[2];
    }
    // alert(document.getElementById('id-write-category').value);


}


var boardSize = document.getElementById('id-board-pages').getAttribute('total'); // 사이즈 가져오기
var size = document.getElementById('id-board-pages').getAttribute('size');
var table = document.getElementById('id-board');


for(var i=1;i<=Math.ceil(boardSize/size);i++){
    document.getElementById('id-board-'+i+'-page').addEventListener('click',clickPages);
}

