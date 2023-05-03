"use strict";

$(function () {
    $('.open').on('click', () => {
        $('.popup').addClass('show')
    })
    $('.close').on('click', () => {
        $('.popup').removeClass('show')
    })
    $('.switch').on('click', () => {
        $('.switch').toggleClass('active');
        $('.varac').toggleClass('z')
    })
})