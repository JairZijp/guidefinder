$(function () {
    $(".volgende").on('click', function () {
        $("#vraag1").fadeOut(300);
        $("#vraag2").delay(300).fadeIn(300);
    });
})