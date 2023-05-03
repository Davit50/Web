<?php
?>
<form action="" method="" id="form" style="width: 50%;margin: 0 auto">
    <div style="display: flex;flex-direction: column">
        <label for="">Name</label>
        <input type="text" name="name">
        <label for="">Surname</label>
        <input type="text" name="surname">
        <select name="Country" id="">
            <option value="Gyumri">Gyumri</option>
            <option value="Erevan">Erevan</option>
            <option value="Kirovakan">Kirovakan</option>
        </select>
    </div>
    <button type="submit">Submit</button>
</form>
<button id="custom"> CUSOM BUTOON</button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $( document ).ready(function() {
        // $('#custom').click(function (event) {
        //     // console.log($(this));
        //     $('#form').submit();
        // })
        $('#form').submit(function (e) {
            e.preventDefault();
            let data = $(this).serialize();
            $.ajax(
                {
                    type : "POST",
                    url : 'N1.php',
                    data : data,
                    success: function (response) {
                        let parsed = JSON.parse(response)
                        console.log(parsed.name)
                        $('#custom').text('asdasdas');
                    },
                    error : function () {
                        console.log('error')
                    }
                }
            )
        });

    });
</script>
