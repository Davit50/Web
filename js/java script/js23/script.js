"use strict";

// let x = document.getElementById('inp');
//
// x.onchange = ()=>{
//     alert(x.value);
// }
// let y= document.getElementById('btn')
// y.addEventListener('click',(event)=>{
//     let span= document.getElementsByTagName('span')[0]
//     // console.log(this.value)
//     span.append( '\n'+'x-i arjeq' + event.clientX + 'y-i arjeq' + event.clientY)
// })

// football

let field=document.getElementById('field')

field.onclick = (event) =>{
    let ball = document.getElementById('ball')
    let fieldCoords = field.getBoundingClientRect();
    console.log(field.getBoundingClientRect());
    console.log('event.clientY->'+event.clientY)
    console.log('fieldCoords.top->'+ fieldCoords.top)
    console.log('ball.clientHeight/2->'+ ball.clientHeight/2)
    console.log(event.clientY-fieldCoords.top-ball.clientHeight/2)
    let ballCoords = {
        top:event.clientY-fieldCoords.top-ball.clientHeight/2,
        left:event.clientX- fieldCoords.left -ball.clientWidth/2
    }
    if(ballCoords.top<0){ballCoords = 0}
    if(ballCoords.left<0){ballCoords = 0}
    // aj  
    if(ballCoords.left+ball.clientWidth>field.clientWidth){
        ballCoords.left=field.clientWidth - ball.clientWidth
    }
    //nerqev
    if(ballCoords.top+ball.clientHeight>field.clientHeight){
        ballCoords.top=field.clientHeight - ball.clientHeight
    }
    ball.style.left= ballCoords.left + 'px'
    ball.style.top =ballCoords.top + 'px'
}