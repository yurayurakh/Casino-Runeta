$(document).ready(function() {

    //Mobile
    if(screen.width < 768)
    {
        //Vk mobile resize
        $("#vk_groups").width("290").children().width("290");

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

    }
});