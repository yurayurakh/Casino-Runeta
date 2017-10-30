$(document).ready(function() {

    $('#search-btn').click(function () {
        if($("#search-block").hasClass("search-open")){
            $("#search-block").toggleClass('search-open').fadeOut(300);
        }else {
            $("#search-block").toggleClass('search-open').fadeIn(300);
        }

    });
});