<?php
?>
<form action="" method="" id="form" style="width: 50%;margin: 0 auto">
    <div style="display: flex;flex-direction: column">
        <label for="">Name</label>
        <input type="text" name="name" id="name_inp" value="nameINp">
        <label for="">Surname</label>
        <input type="text" name="surname" id="surname_inp" value="SurnameINp">
        <select name="Country" id="">
            <option value="Gyumri">Gyumri</option>
            <option value="Erevan">Erevan</option>
            <option value="Kirovakan">Kirovakan</option>
        </select>
    </div>
    <button type="submit">Submit</button>
</form>
<div id="errors"></div>
<!--<button id="custom"> CUSOM BUTOON</button>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        //     // $('#custom').click(function (event) {
        //     //     // console.log($(this));
        //     //     $('#form').submit();
        //     // })
        //     $('#form').submit(function (e) {
        //         e.preventDefault();
        //         let data = $(this).serialize();
        //         $.ajax(
        //             {
        //                 type : "POST",
        //                 url : 'lesson3.php',
        //                 data : data,
        //                 success: function (response) {
        //                     let parsed = JSON.parse(response)
        //                     console.log(parsed.name)
        //                     $('#custom').text('asdasdas');
        //                 },
        //                 error : function () {
        //                     console.log('error')
        //                 }
        //             }
        //         )
        //     });
        //

// $.ajax({
//     type : 'get',
//     url : 'data.txt',
//     data : {name : $('#name_inp').val(),surname : 'TEST'},
//     success : function (data) {
//         console.log(data,'ajax_form_first')
//     }
//     error: function (data) {
//         console.log(data)
//     }
// })

// $.get('data.txt',function (data) {
//     console.log(data,'ajax_form_second')
// })
        $.post('ajax_result.php',{name : $('#name_inp').val(),surname : $('#surname_inp').val()})
            .fail(function () {
            console.log('error')
        }).done(function (response) {
            let res_data = JSON.parse(response);
            for (let i = 0;i< res_data.error.length;i++)  {
                $('#errors').text(res_data.error[i] + ' ')
            }
            // console.log(res_data.error,'err')
            // console.log(res_data.success,'success')
        })
    });
</script>
