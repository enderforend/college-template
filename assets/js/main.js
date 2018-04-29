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