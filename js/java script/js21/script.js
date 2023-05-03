"use strict";

let text = document.getElementById('test');

let a = Math.abs(Math.floor(Math.random() * 100 + 10));
let b = Math.abs(Math.floor(Math.random() * 100 - 10));
let c = Math.abs(Math.floor(Math.random() * 100 + 2));

console.log('a='+a, 'b='+b, 'c='+c);
console.log(Math.random());

console.log(window.pageXOffset);
console.log(window.pageYOffset);
console.log(text.clientLeft);
console.log(text.clientTop);
function changeFont() {
    text.style.fontSize = a + "px";
    text.style.color = 'rgb(' + a + ',' + b + ',' + c + ')'
}

function  getInputVal() {
    let x= document.getElementsByTagName('input')[0].value;
    console.log(x)
    let span=document.getElementById('inputVal');
    span.append(x)
}