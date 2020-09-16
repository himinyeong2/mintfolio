document.getElementById('id-about-me').addEventListener('click',function(){
    document.getElementById('main').style.display="none";
    document.getElementById('about-me').style.display="block";
});

document.getElementById('id-main').addEventListener('click',function(){
    document.getElementById('main').style.display="block";
    document.getElementById('about-me').style.display="none";
});