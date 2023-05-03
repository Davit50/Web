 "use strict";

let d=+prompt('greq tiv');

if(d%3===0){
    alert('privet');
}else{
    alert('fdgfgh');
}
let x=!('hello');
console.log(x);
(d%5===0) ? alert('ok') : alert('vay');


let x=true;
let newX=""+x;
let Xnew=String(x);

console.log(typeof(x));
console.log(typeof(newX));
console.log(typeof(Xnew));

//while do..while for
//for..in, foreach, map...

let i=0;
while(i<10){
    console.log('qayli hamar@ ='+i);
    i++;
}
let j=25;
while(j<89){
    if(j%2===0){
        console.log(j)
    }
    j++
}
//25-89 2-i bazmapatikner@

let k=0;
let res=1;
while(k<10){
    res=res*2;//res*=2
    k++;
}
console.log(res);
//xndir2  2-i 10 astichan@

// 2*2*2*2*2*2*2*2*2*2 */
let j=35;
while(j>=5){
    if(j%5===0){
        console.log(j)
    }
    j--
}