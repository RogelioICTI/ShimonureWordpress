// jQuery to collapse the navbar on scroll
function collapseNavbar() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
        $(".navbar-default .navbar-nav > .active > a").removeClass("navbar-link-start");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
        $(".navbar-default .navbar-nav > .active > a").addClass("navbar-link-start");
        
        
    }
}

$(window).scroll(collapseNavbar);
$(document).ready(collapseNavbar);
