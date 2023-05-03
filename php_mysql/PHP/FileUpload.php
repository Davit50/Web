<form action="" enctype="multipart/form-data" method="post" style="display: flex;flex-direction: column;width: 50%">
    <input type="file" id="uploaded_file" name="file" onchange="handleChange()">
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
