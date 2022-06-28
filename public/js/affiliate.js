jQuery(document).ready(function () {
    'use strict';
    /*** =====================================
    * Wow Active
    * =====================================***/
     new WOW().init();
     /*** =====================================
     * Navbar fixed
     * =====================================***/
     $(window).scroll(function() {
       if ($(document).scrollTop() > 50) {
         $('.navbar').addClass('scroll-nav');
       } else {
         $('.navbar').removeClass('scroll-nav');
       }
     });
     
});
