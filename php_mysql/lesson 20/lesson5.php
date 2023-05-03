<?php

/* Tnayin…..
kunenanq inputner name surname password(aranc formayi),nayev button vori clicki 
jamanak tvyalnery  khavaqenq objecti mej ev kuxarkenq  backend.... tvyalnery save kenenq
 file I mej …. heto fileic kkardanq kuxarkenq het  ev ktpenq html I mej.. */
?>

    <div style="display: flex;flex-direction: column">
        <label for="">Name</label>
        <input type="text" name="name" id="name_inp" value="nameINp" >
        <label for="">Surname</label>
        <input type="text" name="surname" id="surname_inp" value="surnameINp">  
		<label for="">password</label>
        <input type="text" name="password" id="password_inp" value="passwordINp">
    </div>
    <button type="submit" id="btn">Submit</button>

<div> 
<p id="test"> 

</p>
</div> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
 $('#btn').click(function (e) {
                e.preventDefault();
                let data = {name : $('#name_inp').val(),surname : $('#surname_inp').val(),password : $('#password_inp').val()}
                $.ajax(
                    {
                        type : "POST",
                        url : 'ajax_result.php',
                        data : data,
                        success: function (response) {
                            console.log(response);
							$('#test').load("data.txt");
                        },
                        error : function () {
                            console.log('error')
                        }
                    }
                )
            });
			
			
			
	/* 		$(document).ready(function(){
		$("#btn").click(function(){
			$("#test").load("data.txt");
	
			});
		}); */
</script>
