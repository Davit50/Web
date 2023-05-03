"use strict"


let workers={
	john:300,
	sam:500,
	violet:350,
	tom:1450,
	seda:1500
};
	let a=300;
	let b=0;
	let c="";
for(let i in workers){
		a=workers[i];
		
		c=i;
		
	b=b+workers[i]

}
console.log(c +" --->" +a)
