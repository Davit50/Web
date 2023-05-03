"use strict"

$(function () {
    $('.menu').click((event)=>{
        $('.dropdown').toggleClass('show-drop')
        // event.preventDefault();
    })

    
     $('.open').on('click', () => {
         $('.popup').addClass('show')
    
     })
     $('.close').on('click', () => {
    
         $('.popup').removeClass('show');
     })
        
     $('.switch').on('click', () => {
        $('.switch').toggleClass('active');
         $('.varac').toggleClass('z');
       $('.karmir').toggleClass('but1')
         $('.kanach').toggleClass('bb')
     })
    
     $('.send').on('click', () => {
         if ($(".inp").val() === "") {
             $('p').addClass('stop');
         }
    
     })



})