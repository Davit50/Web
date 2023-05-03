<!Doctype html>
<html>
<head>
 <title>Php</title>
</head>
<body>



<form action="lesson16.php" class="form" enctype="multipart/form-data" method="post" style="display: flex;flex-direction: column;width: 25%">   
   <input type="text" name="name" placeholder = "name" value=""> <br>
    <input type="email" name="email"  placeholder = "email" value=""><br>
	<input type="file" name="image" id="uploaded_file"  value=""  onchange="handleChange()">
    <img src="" alt="" id="uploaded_img">
    <button type="submit">Send data</button>
</form>

  
 	

<script>
function handleChange() {
    var img = document.getElementById('uploaded_img');
    var file = document.getElementById('uploaded_file').files[0];
    var reader = new FileReader();
    reader.onloadend = function () {
        img.src = reader.result;
    }
    if (file) {
        reader.readAsDataURL(file)
    }
}
</script>



</body>
</html>