function gotoEditPage() {
    var pw = prompt("해당 게시글의 비밀번호를 입력하세요");
    if (document.getElementById('id-write-pw').value != pw) {
        alert("비밀번호가 일치하지 않습니다.");
    } else {
        document.getElementById('id-write-category').removeAttribute('disabled');
        document.getElementById('id-write-title').removeAttribute('disabled');
        document.getElementById('id-write-textarea').removeAttribute('disabled');
        document.getElementById('id-board-delete').style.display = "none";
        document.getElementById('id-board-edit').style.display = "none";
        document.getElementById('id-edit').style.display = "block";
        document.getElementById('comment-field').style.display="none";
    }

}
function gotoDelete() {
    var pw = prompt("해당 게시글의 비밀번호를 입력하세요");
    if (document.getElementById('id-write-pw').value != pw) {
        alert("비밀번호가 일치하지 않습니다.");
    } else {
        var thisUrlStr = window.location.href;
        var thisUrl = new URL(thisUrlStr);
        var dno = thisUrl.searchParams.get("dno");
        var data={
            'mode':"DELETE",
            'dno':dno
        }
        fetch('http://localhost/mintfolio/dao/manipulateBoard.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
            .then(res => res.text())
            .then(res => {
                if (res == "SUCCESS") {
                    alert("삭제가 완료되었습니다.");
                    location.href = "board.php";
                }
            })
            .catch((err) => {
                console.error("에러:", err); s
            });
    }
}


function gotoEdit() {

    let today = new Date();
    let year = today.getFullYear(); // 년도
    let month = today.getMonth() + 1;  // 월
    let date = today.getDate();  // 날짜
    var thisUrlStr = window.location.href;
    var thisUrl = new URL(thisUrlStr);
    var dno = thisUrl.searchParams.get("dno");
    // location.href="dao/delete_board.php?dno="+dno;

    var data = {
        'mode':"EDIT",
        'dno': dno,
        'category': document.getElementById('id-write-category').value,
        'writer': document.getElementById('id-write-name').value,
        'password': document.getElementById('id-write-pw').value,
        'title': document.getElementById('id-write-title').value,
        'contents': document.getElementById('id-write-textarea').value,
        'date': year + "-" + month + "-" + date
    };
    fetch('http://localhost/mintfolio/dao/manipulateBoard.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
        .then(res => res.text())
        .then(res => {
            if (res == "SUCCESS") {
                alert("수정이 완료되었습니다.");
                location.href = "board.php";
            }
        })
        .catch((err) => {
            console.error("에러:", err); s
        });
}
function saveComment() {
    var thisUrlStr = window.location.href;
    var thisUrl = new URL(thisUrlStr);
    var dno = thisUrl.searchParams.get("dno");

    var data = {
        'dno': dno,
        'name': document.getElementById('id-comment-input-name').value,
        'pw': document.getElementById('id-comment-input-pw').value,
        'comment': document.getElementById('id-comment-input-textarea').value
    };
    fetch('http://localhost/mintfolio/dao/insert_comment.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
        .then(res => res.text())
        .then(res => {
            if (res == "SUCCESS") {
                alert("댓글입력이 완료되었습니다.");
                location.href = "show-board.php?dno=" + dno;
            }
        })
        .catch((err) => {
            console.error("에러:", err);
        });
}
function saveCommentComment(){
    var thisUrlStr = window.location.href;
    var thisUrl = new URL(thisUrlStr);
    var dno = thisUrl.searchParams.get("dno");
    var pId = this.parentNode.parentNode.id.split("-")[2];

    var data = {
        'dno':dno,
        'commentId': pId,
        'name': document.getElementById('id-comment-comment-name').value,
        'pw': document.getElementById('id-comment-comment-pw').value,
        'comment': document.getElementById('id-comment-comment-textarea').value
    };
    fetch('http://localhost/mintfolio/dao/insert_comment.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
        .then(res => res.text())
        .then(res => {
            if (res == "SUCCESS") {
                alert("댓글입력이 완료되었습니다.");
                location.href = "show-board.php?dno=" + dno;
            }
        })
        .catch((err) => {
            console.error("에러:", err);
        });
}
function showCommentComment() {
    var id = this.id.split("-")[2]; // 클릭한 i
    var doc = document.getElementById('id-comment-comment');
    //처음 클릭했을 경우
    if(doc==null){
        makeCommentComment(id);
    }
    //한번더 클릭했을 경우
    else{
        doc.remove();
    }
    //다른 것을 클릭했을 경우

}
function makeCommentComment(id){
    var clickedDoc = document.getElementById('id-comment-'+id);
    var div1 = document.createElement('div');
    var div2 = document.createElement('div');
    var input1 = document.createElement('input');
    var input2 = document.createElement('input');
    var textarea = document.createElement('textarea');
    var button = document.createElement('button');


    div1.setAttribute('id','id-comment-comment')
    div1.setAttribute('class','comment-input-field comment-comment');
    div2.setAttribute('class','comment-input-info');
    input1.setAttribute('type','text');
    input1.setAttribute('id','id-comment-comment-name')
    input1.setAttribute('placeholder','이름');
    input1.setAttribute('class','input-text comment-input-name');
    input2.setAttribute('id','id-comment-comment-pw')
    input2.setAttribute('type','password');
    input2.setAttribute('placeholder','비밀번호');
    input2.setAttribute('class','input-text comment-input-pw');
    textarea.setAttribute('class','input-text comment-input-textarea')
    textarea.setAttribute('id','id-comment-comment-textarea')
    button.setAttribute('class','input-text board-btn comment-input-save');
    button.setAttribute('id', 'id-comment-comment-btn')
    button.addEventListener('click',saveCommentComment);
    button.innerHTML="저장";
    div2.appendChild(input1);
    div2.appendChild(input2);
    div1.appendChild(div2);
    div1.appendChild(textarea);
    div1.appendChild(button);
    clickedDoc.appendChild(div1);
}
document.getElementById('id-board-edit').addEventListener('click', gotoEditPage);
document.getElementById('id-board-delete').addEventListener('click', gotoDelete);
document.getElementById('id-edit').addEventListener('click',gotoEdit);
document.getElementById('id-comment-input-button').addEventListener('click', saveComment);

for (var i = 0; i < document.getElementsByClassName('comment-comment-btn').length; i++) {
    document.getElementsByClassName('comment-comment-btn')[i].addEventListener('click', showCommentComment);
}
