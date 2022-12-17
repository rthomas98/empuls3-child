// Add your custom JS here.
(function($) {

    $(document).ready(function($){

    });

})( jQuery );


// changes background color on main nav
window.onscroll = function() {
    let navbar = document.getElementById("main-nav");
    if (window.pageYOffset > 0) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
};