document.getElementById('id-diary-save').addEventListener('click',function(){
    var data={
        'id':document.getElementById('id-diary-date').innerHTML,
        'title':document.getElementById('id-diary-title').value,
        'content':document.getElementById('diary-text-area').value,
        'date':document.getElementById('id-diary-date').innerHTML
    };
    fetch('http://localhost/diary/insert.php',{
        method:'POST',
        headers:{
            'Content-Type':'application/json'
        },
        body:JSON.stringify(data)
    })
    .then(res=>res.text())
    .catch((err)=>{
        console.error("에러:",err);
    });

});