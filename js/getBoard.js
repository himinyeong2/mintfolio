function getBoardForCategory(){ // 전체 카테고리 별 그거 호출.. 
    var category = document.getElementById('id-board-category').value;
    alert(category);
    document.getElementById('board-frame').setAttribute('src','board_content.php?category='+category);
}

document.getElementById('id-board-search').addEventListener('click', getBoardForCategory)