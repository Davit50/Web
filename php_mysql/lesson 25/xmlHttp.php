<div id="" style="display:flex ;  flex-direction:column ; width:300px">
    <input type="text" id="userName" name="name" value="Name" >
    <input type="text" id="userSurname" name="surname" value="Surname" >
    <input type="password" id="userpassword" name="password" value="password" >
    <button onclick="showData()">Send</button>
</div>
<h1 id="responseText">
Hello
</h1>
<script>
    function showData(str) {
            var xml = new XMLHttpRequest();
            xml.onreadystatechange = function () {
                if (xml.status == 200 && xml.readyState == 4) {
                    console.log(this.responseText)
                }
            }
        let name = document.getElementById('userName');
        let surname = document.getElementById('userSurname')    ;  
		let password= document.getElementById('userpassword');
		let resp= document.getElementById('responseText');
		
      //post
         let dataEncoded = " name= " + name.value + "\n" + ' surname= ' + surname.value +  "\n" + " password= " + password.value ;
        xml.open("POST","file.php",true);
        resp.innerText = dataEncoded;
         xml.send(dataEncoded);
		 
		 
	//get
	

/*  let url = "file.php?name=" + name.value + ' surname= ' + surname.value + " password= " + password.value;
xml.open("GET",url,true);
resp.innerText = url;
xml.send();
		 
		  */
		 
		
	 }
   
</script>
