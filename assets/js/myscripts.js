$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {

        $('.navbar').css('background', 'transparent');

    } else {
        $('.navbar').css('background', 'transparent');
    }
});


//navbar closemenu colapse show and close and toggler show and close//  
$(document).ready(function () {
    $(".navbar-toggler").click(function () {
        $("#navbarSupportedContent").toggle();
    });

    $("#closeMenu").click(function () {
        $("#navbarSupportedContent").hide();
        $("#navbutton").show();
    });
});

//navbar toggler hide//
$('#navbutton').click(function () {
    $('#navbutton').hide(0);
});



//submit alert//
function myFunction() {
  alert("Welcome Yariel You are Login");         
}

