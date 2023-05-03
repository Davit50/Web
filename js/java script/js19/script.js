"use strict";

// let text = document.getElementById('example');
//
// console.log(text.hasAttribute('style'));//true
// console.log(text.getAttribute('style')); //color:red
// text.setAttribute('class','title');
// console.log(text.attributes,'skzbnakan');
// text.removeAttribute('align');
// console.log(text.attributes,'jnjeluc heto');
// let link=document.getElementsByTagName('a')[0];
// console.log(link.getAttribute('href'));
// link.setAttribute('style','font-size:20px;text-decoration:none;');

// դաս 2 lesson 2

let text = document.getElementById('example');
let d = document.getElementById('one');

let link =document.getElementById('link');
// link.remove();

let divFromJs = document.createElement("h5");
d.append(document.createElement('p'));
//prepend()
// text.before(divFromJs);
text.after(divFromJs);
divFromJs.append("text text text");

d.classList.add('title');
link.classList.remove('title');
console.log(document.body.className);

function ok() {
    text.classList.toggle('two')
}
