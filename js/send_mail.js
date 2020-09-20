function sendEmail(){
    var data = {
        'name':document.getElementById('id-contact-name').value,
        'email':document.getElementById('id-contact-email').value,
        'phone':document.getElementById('id-contact-phone').value,
        'contents':document.getElementById('id-contact-contents').value
    };
    fetch('http://localhost/mintfolio/dao/send_mail.php',{
        method:'POST',
        headers:{
            'Content-Type':'application/json'
        },
        body:JSON.stringify(data)
    })
    .then(res=>res.text())
    .then(res=>{
        if(res=="SUCCESS"){
           alert( "메일을 보냈습니다.");
        }
    })
    .catch((err)=>{
        console.error("에러:",err);
    });
}

document.getElementById('id-send-email').addEventListener('click',sendEmail);