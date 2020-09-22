
function clickPages(){
    var strArray = this.id.split("-");
    // alert(strArray[2]);
    location.href='./board.php?page='+strArray[2];
}
var boardSize = document.getElementById('id-board-pages').getAttribute('size'); // 사이즈 가져오기
for(var i=1;i<=parseInt(boardSize/3+1);i++){
    document.getElementById('id-board-'+i+'-page').addEventListener('click',clickPages);
}