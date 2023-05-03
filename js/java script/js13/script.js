                    "use strict" ;



let a=+prompt('enter num1');
let b=+prompt('enter num2 ');



function change(){		
if(a>b){let	id=document.getElementById('True');
id.style.color="red";}
else if(a<b){let	id=document.getElementById('False');
id.style.color="red";}
else if(a=b){let	id=document.getElementById('NaN');
id.style.color="red";}

}				  

