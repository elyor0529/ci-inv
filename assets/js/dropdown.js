$(document).ready(function(e) {
    $('.drop-vertic').click(function() {
        $(this).toggleClass('click');
    });
    $(".nav-ul .drop-vertic").click(function() {
        $(this).find("ul").stop().slideToggle(300);
    });
});

