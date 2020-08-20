$(document).ready(function(){
    $('#slider-hero').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        margin:0,
        items: 1,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"><i>',
            '<i class="fa fa-angle-right" aria-hidden="true"><i>',
        ],
        navContainer: '#slider-hero-nav', 
    });

    $('#tenaga-pendidik-slider').owlCarousel({
        loop: true,
        nav: true,
        items: 3,
        margin:20,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"><i>',
            '<i class="fa fa-angle-right" aria-hidden="true"><i>',
        ],
        navContainer: '#slider-tools-1', 
    });
    $('#peserta-didik-slider').owlCarousel({
        loop: true,
        nav: true,
        items: 3,
        margin:20,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"><i>',
            '<i class="fa fa-angle-right" aria-hidden="true"><i>',
        ],
        navContainer: '#slider-tools-12', 
    });

    $('#alumni-slider').owlCarousel({
        loop: true,
        nav: true,
        items: 2,
        margin:20,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"><i>',
            '<i class="fa fa-angle-right" aria-hidden="true"><i>',
        ],
        navContainer: '#slider-tools-2', 
    });
    $('#galeri-document-slider').owlCarousel({
        loop: true,
        nav: true,
        items: 3,
        margin:20,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"><i>',
            '<i class="fa fa-angle-right" aria-hidden="true"><i>',
        ],
        navContainer: '#slider-tools-3', 
    });
});