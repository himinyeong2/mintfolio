function insertBoard() {
    let today = new Date();

    let year = today.getFullYear(); // 년도
    let month = today.getMonth() + 1;  // 월
    let date = today.getDate();  // 날짜
    var data = {
        'category':document.getElementById('id-write-category').value,
        'writer':document.getElementById('id-write-name').value,
        'password':document.getElementById('id-write-pw').value,
        'title':document.getElementById('id-write-title').value,
        'contents':document.getElementById('id-write-textarea').value,
        'date': year+"-"+month+"-"+date
    };
    fetch('http://localhost/mintfolio/dao/insert_board.php',{
        method:'POST',
        headers:{
            'Content-Type':'application/json'
        },
        body:JSON.stringify(data)
    })
    .then(res=>res.text())
    .then(res=>{
        if(res=="SUCCESS"){
           alert( "입력이 완료되었습니다");
           location.href="board.php";
        }
    })
    .catch((err)=>{
        console.error("에러:",err);
    });
}

document.getElementById('id-board-insert').addEventListener('click',insertBoard);
