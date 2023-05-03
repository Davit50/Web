  <input type="file" id="file" name="Image">
    <img id="uploadedImage" src=""></img>
	<button value="upload" id="but_upload" type="submit" name="submit">Send data</button>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>

  $(document).ready(function(){
	 $('#but_upload').click(function(){
		 
		 var fd = new FormData();
		 var files = $('#file')[0].files[0];
		 fd.append('file',files);
		  
	  $.ajax({
		 type:'post',
		  url:'test.php',
		  data:fd,
		  contentType:false,
		  processData:false,
		  success:function(response){
             $("#uploadedImage").attr("src",response);
			
	        
		  },
	  });
  });
 });
 </script>
