function saveValue(e){
    var id = e.id;  // get the sender's id to save it . 
    var val = e.value; // get the value. 
    storage.setItem(id, val);// Every time user writing something, the localStorage's value will override . 
}

function getSavedValue(v){
    if (!storage.getItem(v)) {
        return "";// You can change this to your defualt value. 
    }
    return storage.getItem(v);
}

function deleteValue(e){
    storage.removeItem(e);
}

function getBoardForCategory(){ // 전체 카테고리 별 그거 호출.. 
    var category = document.getElementById('id-board-category');
    location.href = "board.php?category="+category.value;
    saveValue(category);
}

var storage = window.sessionStorage;

document.getElementById('id-board-category').value = getSavedValue('id-board-category');

document.getElementById('id-board-search').addEventListener('click', getBoardForCategory);

