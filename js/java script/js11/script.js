"use strict";

      
 
 
 
  let day=prompt("date?");   
 switch (day){
	 case "monday":   
	 alert(day);
	 break;
	 case "thesday":   
	 alert(day);
	 break;
	 case "wednesday":   
	 alert(day);
	 break;
	 case "thursday":   
	 alert(day);
	 break;
	  case "friday":   
	 alert(day);    
	 break;     
	  case "saturday":   
	 alert(day);   
	 break;
	  case "sunday":   
	 alert(day);
	 break;
	 default:
	 alert('sxal')
 } 
 
   document.write('<table cellpadding="45">');
   for (let i=1;i<=8;i++) {
	   for( let j=1;i<=8;i++){
		   if ((i+j)%2===0){
			   document.write('<tr style="background-color:aqua;">');
			       document.write('<td style="background-color:black;"><td><td style="background-color:black;"><td><td style="background-color:black;"><td><td style="background-color:black;"><td>');
			   document.write('</tr>');
		   }
		   else{
			   document.write('<tr style="background-color:black;">');
			       document.write('<td style="background-color:aqua;"><td><td style="background-color:aqua;"><td><td style="background-color:aqua;"><td><td style="background-color:aqua;"><td>');
			   document.write('</tr>'); 
			   }
   }}


 
 
 