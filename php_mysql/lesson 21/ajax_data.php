<?php
?>
<div id="form" style="width: 50%;margin: 0 auto">
<form action="" enctype="multipart/form-data">
<input type="file">
</form>
    <div style="display: flex;flex-direction: column">
        <label for="">Name</label>
        <input type="text" name="name" id="name_inp" value="">
        <label for="">Surname</label>
        <input type="text" name="surname" id="surname_inp" value="">
        <select name="Country" id="country_select">
            <option value="Gyumri">Gyumri</option>
            <option value="Erevan">Erevan</option>
            <option value="Kirovakan">Kirovakan</option>
        </select>
    </div>
    <button>Submit</button>
</div>
<div id="errors"></div>
<button id="custom"> CUSOM BUTOON</button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

 //$(document).ready(function () {
	 

/* 	 $('#name_inp').on('input',function(e){
		 console.log($(this).val())
		 // or 
		 //console.log(e.target.value)
	 })
	  */
/* 	 	 $('#country_select').on('change',function(e){
		 console.log($(this).val())
	 })
	 */
// }) 


    $(document).ready(function () {
        $('#custom').on('click',function (e) {
			console.log($('#file_inp'));
            $.ajax({
                    type : "POST",
                    url : 'lesson5.php',
                    data : {file:$('#file_inp').val(), name: $('#name_inp').val(),surname :$('#surname_inp').val(),country: $('#country_select').val()},
                  headers:{
					  "Content-Type" : "multipart/form-data"
				  },
				  success: function (response) {
						let data = (response);
						console.log('country' ,data.country);
						console.log('name' ,data.name);
						console.log('surname' ,data.surname);
                    },
                    error : function () {
                        console.log('error')
                    }
                })
                })
    });
</script>
