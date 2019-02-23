$(window).scroll(function(){
        if( $(this).scrollTop()>50){
            
            $('.navbar').css('background','black');
           
          }else{
            $('.navbar').css('background','transparent');
          }
    });
    
   $(document).ready(function(){
    $(".navbar-toggler").click(function(){
        $("#navbarSupportedContent").toggle();
    });
    
    $("#closeMenu").click(function(){
        $("#navbarSupportedContent").hide();
    });
});