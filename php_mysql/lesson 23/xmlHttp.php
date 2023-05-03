<div id="">
    <input type="text" id="userName" name="name" >
    <input type="text" name="surname" id="userSurname">
    <button onclick="showData()">SendData</button>
</div>
<h1 id="responseText">

</h1>
<script>
    function showData(str) {
            var xml = new XMLHttpRequest();
            xml.onreadystatechange = function () {
                if (xml.status == 200 && xml.readyState == 4) {
                    console.log(this.responseText)
                }
            }
        let name = document.getElementById('userName')
        let surname = document.getElementById('userSurname')
		
      //post

	  let data = {
                name :name,
                surname: surname
        }
        let dataEncoded = "name=" + name.value+'&surname=' +surname.value;
        xml.open("POST","file.php",true)
         xml.setRequestHeader("Content-type","application/x-www-form-urlencoded")
        // xml.setRequestHeader("Content-type","application/json")
        // xml.send(JSON.stringify(data));
        document.getElementById('responseText').innerText = ''
         xml.send(dataEncoded);
     
	
	
	//get
	

/* let url = "file.php?name=" + name.value + '&surname=' + surname.value;
xml.open("GET",url,true);
xml.send();
 */
 
 
	 }
    
</script>
