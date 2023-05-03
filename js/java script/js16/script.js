  "use strict";

let h1=document.getElementById('one').textContent;

console.log(h1);

let c=document.getElementsByClassName('two');

console.log(c[1]);

let t=document.getElementsByTagName('p');
for(let i=0;i<t.length;i++){
    console.log(t[i]);
}
console.log(t);

let n=document.getElementsByName('ok');

console.log(n);

let q=document.querySelector('p');

console.log(q);
