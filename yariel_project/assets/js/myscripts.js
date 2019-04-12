$(document).ready(function () {
//Aqui pon tu codigo

    $(".tile-front").click(function () {
        $(".tile-front").hide();
        $(".tile-back").show();
    });

    $(".tile-back").click(function () {
        $(".tile-back").hide();
        $(".tile-front").show();
    });

});
