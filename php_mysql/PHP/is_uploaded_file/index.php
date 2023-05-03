<!Doctype html>
<html>
<head>
 <title>Php4</title>
 <style>

 .form{
	 display:flex;
	 flex-direction:column;
 }
 </style>
</head>
<body>
  <form class="form" action="index2.php" method="post" enctype="multipart/form-data">
  <label for="name">Name</label>
  <input type="text" name="name">
  <label for="name">Image</label>
  <input type="file" name="image">
  <button type="submit">Save</button>
  </form>
  
</body>
</html>