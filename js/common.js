$(document).ready(function() {

    $('#search-btn').click(function () {
        if($("#search-block").hasClass("search-open")){
            $("#search-block").toggleClass('search-open').fadeOut(300);
        }else {
            $("#search-block").toggleClass('search-open').fadeIn(300);
        }
    });


    if(screen.width < 1200)
    {

        //Hamburger menu
        $( ".cross" ).hide();
        $( ".nav" ).hide();
        $( ".hamburger" ).click(function() {
            $( ".nav" ).slideToggle( 200, function() {
                $( ".hamburger" ).hide(300);
                $( ".cross" ).show(300);
            });
        });

        $( ".cross" ).click(function() {
            $( ".nav" ).slideToggle( 200, function() {
                $( ".cross" ).hide(300);
                $( ".hamburger" ).show(300);
            });
        });
    } else {
        $( ".nav" ).show();
    }

    if(screen.width < 768)
    {
        $('#main').append($('#inner_post'));
    }
});