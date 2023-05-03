<html>
<body>
<form id="form">
<input  type="text" value="NAME" name="name"><br>
<input type="text" value="SURNAME" name="surname"><br>
<input type="password" value="PASSWORD" name="password"><br>
<input type="file" name="file" id="file_"><br>
<button type="submit" >Save</button>
</form>
<div id="content"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
  $(document).ready(function(){
	 $('#form').submit(function(event){
		  event.preventDefault();
	 
	  $.ajax({
		 type:'post',
		  url:'file.php',
		  data:($('#form').serialize()),
		  success:function(response){
             $("#content").text(response);
	        
		  }
	  })
  })
 });
 </script>



</body>
</html>