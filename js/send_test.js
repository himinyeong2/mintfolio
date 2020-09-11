document.getElementById('id-diary-save').addEventListener('click',function(){

    var data={
        'id':document.getElementById('id-diary-date').innerHTML,
        'content':document.getElementById('diary-text-area').value,
        'action':"INSERT"
    };
    fetch('http://localhost/mintfolio/insert.php',{
        method:'POST',
        headers:{
            'Content-Type':'application/json'
        },
        body:JSON.stringify(data)
    })
    .then(res=>res.text())
    .then(res=>{
        if(res=="SUCCESS"){
           alert( "다이어리 입력이 완료되었습니다");
           document.getElementById('diary-text-area').value="";
           document.getElementById('id-postit').style.display="none";
        }
    })
    .catch((err)=>{
        console.error("에러:",err);
    });

});

document.getElementById('id-diary-edit').addEventListener('click',function(){
    var data={
        'id':document.getElementById('id-diary-date').innerHTML,
        'content':document.getElementById('diary-text-area').value,
        'action':"EDIT"
    };
    fetch('http://localhost/mintfolio/insert.php',{
        method:'POST',
        headers:{
            'Content-Type':'application/json'
        },
        body:JSON.stringify(data)
    })
    .then(res=>res.text())
    .then(res=>{
        if(res=="SUCCESS"){
           alert( "다이어리 수정이 완료되었습니다");
           document.getElementById('diary-text-area').value="";
           document.getElementById('id-postit').style.display="none";
        }
    })
    .catch((err)=>{
        console.error("에러:",err);
    });

});

document.getElementById('id-diary-delete').addEventListener('click',function(){
    var data={
        'id':document.getElementById('id-diary-date').innerHTML,
        'content':document.getElementById('diary-text-area').value,
        'action':"DELETE"
    };
    fetch('http://localhost/mintfolio/insert.php',{
        method:'POST',
        headers:{
            'Content-Type':'application/json'
        },
        body:JSON.stringify(data)
    })
    .then(res=>res.text())
    .then(res=>{
        if(res=="SUCCESS"){
           alert( "다이어리 삭제가 완료되었습니다");
           document.getElementById('diary-text-area').value="";
           document.getElementById('id-postit').style.display="none";
        }
    })
    .catch((err)=>{
        console.error("에러:",err);
    });

});

