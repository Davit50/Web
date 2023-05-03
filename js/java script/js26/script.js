"use strict";

$(function(){
    let x= $('#text');
    // console.log($('#text').css('color'))
    x.css('color','red')
    x.css({
       'font-size':'35px',
       'font-weight': 100
    });
    $('.row div').css('height',(val)=>{
        val = Math.floor(Math.random()*100)
        return val
    })
});