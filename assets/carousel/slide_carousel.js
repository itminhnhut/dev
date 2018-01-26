jQuery(document).ready(function(){
  jQuery('.owl-carousel').owlCarousel({
    loop:true,
    dots: false,
    margin:10,
    nav: true,
    navText: ['<button type="button" data-role="none" class="slick-prev" style="display: block;">Previous</button>','<button type="button" data-role="none" class="slick-next" style="display: block;">Next</button>'],
    autoplay: true,
    autoplaySpeed: 2000,
    autoplayTimeout: 1000,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: true
      },
       400: {
        items: 2,
        nav: true
      },
      600: {
        items: 3,
        nav: true
      },
      1000: {
        items: 4,
        nav: true,
        margin: 20
      }
    }
  });
});