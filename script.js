
function changePage() {
    var clickedPage = this.id.substring(3, this.id.length);
    pageArray = new Array("home", "about-me", "experiences", "board");
    for (var i = 0; i < 4; i++) {
        if (pageArray[i] == clickedPage) {
            document.getElementById(pageArray[i]).style.display = "block";
        }
        else {
            document.getElementById(pageArray[i]).style.display = "none";
        }
    }
}
function rowClick(){
    alert("메롱");
}
document.getElementById('id-about-me').addEventListener('click', changePage);
document.getElementById('id-home').addEventListener('click', changePage);
document.getElementById('id-experiences').addEventListener('click',changePage);
// document.getElementById('id-board').addEventListener('click',changePage);

