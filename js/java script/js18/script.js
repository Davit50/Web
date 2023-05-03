"use strict";


let text = document.getElementById('example');

console.log(text.hasAttribute('style'));//true
console.log(text.getAttribute('style')); //color:red
text.setAttribute('class','title');
console.log(text.attributes,'skzbnakan');

text.removeAttribute('align');

console.log(text.attributes,'jnjeluc heto');

let link=document.getElementsByTagName('a')[0];

console.log(link.getAttribute('href'));

link.setAttribute('style','font-size:20px;text-decoration:none;');

let d = document.getElementById('one');

d.append("<p>shdjhdg</p>");

let divFromJs = document.createElement("div");


// divFromJs.setAttribute('style',"height:100px;width:100px;background:red");
divFromJs.append("text text text")