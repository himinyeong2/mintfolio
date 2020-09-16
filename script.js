document.getElementById('id-about-me').addEventListener('click',function(){
    document.getElementById('home').style.display="none";
    document.getElementById('about-me').style.display="block";
});

document.getElementById('id-home').addEventListener('click',function(){
    document.getElementById('home').style.display="block";
    document.getElementById('about-me').style.display="none";
});