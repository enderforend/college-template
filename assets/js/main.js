$('.directions-blocks').slick({
 arrows: false,
 dots: true,
 slidesToShow: 4,
 slidesToScroll: 1,
 responsive: [
 {
   breakpoint: 768,
   settings: {
    slidesToShow: 1,
    slidesToScroll: 1,
   }
  },
  {
   breakpoint: 1200,
   settings: {
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true
   }
  },
 ]
}); 
//slick-slider
jQuery(document).ready(function($) {
 var menuBtn = $('.top-nav_btn')
 var menu = $('.top-nav_menu')

 menuBtn.on('click', function(event) {
  event.preventDefault();
  menu.toggleClass('top-nav_menu__active');
 });
});
//top-nav_menu__active
jQuery(document).ready(function($) {
 var sidebarBtn = $('.left-sidebar_btn')
 var sidebarObject = $('.left-sidebar_object')

 sidebarBtn.on('click', function(event) {
  event.preventDefault();
  sidebarObject.toggleClass('left-sidebar_object__active');
 });
});
//left-sidebar_object__active