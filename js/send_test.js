document.getElementById('id-diary-save').addEventListener('click',function(){
    var data={
        'id':document.getElementById('id-diary-date').innerHTML,
        'title':document.getElementById('id-diary-title').value,
        'content':document.getElementById('diary-text-area').value,
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
           document.getElementById('id-diary-title').value="";
           document.getElementById('diary-text-area').value="";
        }
    })
    .catch((err)=>{
        console.error("에러:",err);
    });

});
