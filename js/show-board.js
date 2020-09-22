function gotoEditPage(){
    var pw = prompt("해당 게시글의 비밀번호를 입력하세요");
    if(document.getElementById('id-write-pw').value!=pw){
        alert("비밀번호가 일치하지 않습니다.");
    }else{
        document.getElementById('id-write-category').removeAttribute('disabled');
        document.getElementById('id-write-title').removeAttribute('disabled');
        document.getElementById('id-write-textarea').removeAttribute('disabled');
        document.getElementById('id-board-delete').style.display="none";
        document.getElementById('id-board-edit').style.display="none";
        document.getElementById('id-edit').style.display="block";
    }
    
}
function gotoDelete(){
    var pw = prompt("해당 게시글의 비밀번호를 입력하세요");
    if(document.getElementById('id-write-pw').value!=pw){
        alert("비밀번호가 일치하지 않습니다.");
    }else{
        var thisUrlStr = window.location.href;
        var thisUrl = new URL(thisUrlStr);
        var dno = thisUrl.searchParams.get("dno");
        // location.href="dao/delete_board.php?dno="+dno;
        fetch('http://localhost/mintfolio/dao/delete_board.php?dno='+dno,{
            method:'GET',
        })
        .then(res=>res.text())
        .then(res=>{
            if(res=="SUCCESS"){
               alert( "삭제가 완료되었습니다.");
               location.href="board.php";
            }
        })
        .catch((err)=>{
            console.error("에러:",err);
        });
    }
}


function gotoEdit(){

        var thisUrlStr = window.location.href;
        var thisUrl = new URL(thisUrlStr);
        let today = new Date();
        let year = today.getFullYear(); // 년도
        let month = today.getMonth() + 1;  // 월
        let date = today.getDate();  // 날짜
        var dno = thisUrl.searchParams.get("dno");
        // location.href="dao/delete_board.php?dno="+dno;

        var data = {
            'dno':dno,
            'category':document.getElementById('id-write-category').value,
            'writer':document.getElementById('id-write-name').value,
            'password':document.getElementById('id-write-pw').value,
            'title':document.getElementById('id-write-title').value,
            'contents':document.getElementById('id-write-textarea').value,
            'date': year+"-"+month+"-"+date
        };
        fetch('http://localhost/mintfolio/dao/edit_board.php',{
            method:'POST',
            headers:{
                'Content-Type':'application/json'
            },
            body:JSON.stringify(data)
        })
        .then(res=>res.text())
        .then(res=>{
            if(res=="SUCCESS"){
               alert( "수정이 완료되었습니다.");
               location.href="board.php";
            }
        })
        .catch((err)=>{
            console.error("에러:",err);
        });
}
document.getElementById('id-board-edit').addEventListener('click', gotoEditPage);
document.getElementById('id-board-delete').addEventListener('click', gotoDelete);
document.getElementById('id-edit').addEventListener('click',gotoEdit);