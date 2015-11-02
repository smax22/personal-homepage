/**
 * Created by maximilianschwarzmuller on 30.10.15.
 */
"use strict";

$(document).ready(function () {
    // Mobile navigation
    $(".top-navigation").on('click', '.collapsed', function() {
       $('.top-navigation').find('.navigation-elements-collapsed').slideToggle();
    });

    // Toggle the comment editor
    $('.comments').on('click', '#write-comment', function () {
       $('.comments').find('.write-comment').slideToggle();
    });

    // Load the required company detail section
     $('.companies').on('click', 'a', function (event) {
         event.preventDefault();
         event.stopPropagation();
         var index = $(this).index();
         $('.details').children().hide(200, function() {
             $('.details').children().eq(index).show(200);
         });
     });
});

