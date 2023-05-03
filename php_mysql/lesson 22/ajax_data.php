<?php
?>
<!--<div id="form" style="width: 50%;margin: 0 auto">-->
<!--    <div style="display: flex;flex-direction: column">-->
<!--        <label for="">Name</label>-->
<!--        <input type="text" name="name" id="name_inp" value="">-->
<!--        <label for="">Surname</label>-->
<!--        <input type="text" name="surname" id="surname_inp" value="">-->
<!--        <input type="file" name="surname" id="file_inp" value="" multiple>-->
<!--        <select name="Country" id="country_select">-->
<!--            <option value="Gyumri">Gyumri</option>-->
<!--            <option value="Erevan">Erevan</option>-->
<!--            <option value="Kirovakan">Kirovakan</option>-->
<!--        </select>-->
<!--    </div>-->
<!--    <button id="custom">Submit</button>-->
<!--</div>-->
<img src="" id="img" alt="">
<div id="errors"></div>
<button id="custom"> CUSOM BUTOON</button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#custom').on('click',function (e) {
            let file = $('#file_inp')[0].files[0];

            let form = new FormData();
            form.append('file',file)
            form.append('name',$('#name_inp').val())
            form.append('surname',$('#surname_inp').val())
            form.append('country',$('#country_select').val())

            $.ajax({
                    type : "POST",
                    url : 'google.maps/',
                    data : {name: 'name',surname : 'asdasdh'},
                    headers : {
                            "Api-key" : "askdasjmdbqwjkrhnsdnmfndsfks"
                    },
                // processData: false,
                // contentType: false,

                success: function (response) {
                    let data = JSON.parse(response);
                    $('#img').attr('src',data.file)
                        // console.log('country',data.country)
                        // console.log('name',data.name)
                        // console.log('surname' ,data.surname)
                    },
                    error : function () {
                        console.log('error')
                    }
                })
                })
    });
</script>
