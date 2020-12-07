var menuHeight = $("#header").height();
// alert(menuHeight);
var startPos = 0;
$(window).scroll(function () {
    var currentPos = $(this).scrollTop();
    if (currentPos > startPos) {
        if ($(window).scrollTop() >= 200) {
            $("#header").css("top", "-" + menuHeight + "px");
        }
    } else {
        $("#header").css("top", 0 + "px");
    }
    startPos = currentPos;
});
$(".menu li").click(function () {
    var target_id = this.getAttribute("data-target");
    var animate_position = $(target_id).offset().top;
    $('html, body').animate({ scrollTop: animate_position }, 400);
});
document.getElementById('love').addEventListener('mouseover', function () {
    document.getElementById('love_img').style.transform = "scale(3)";
    document.getElementById('love_img').style.opacity = "60%";
});
document.getElementById('love').addEventListener('mouseleave', function () {
    document.getElementById('love_img').style.transform = "scale(1)";
    document.getElementById('love_img').style.opacity = "0%";
});