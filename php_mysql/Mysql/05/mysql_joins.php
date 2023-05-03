<?php
include '../config.php';
$con = new mysqli(DB_HOST,DB_USER_NAME,DB_PASSWORD);

//if ($con->connect_error) {
//    echo 'Db Failed : ' . $con->connect_error;
//    die;
//}
$query = "USE test_db";
$con->query($query);
//$sqlCreateTable = "CREATE TABLE IF NOT EXISTS products (
//id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//name VARCHAR (255),
//price INT(11)
//)";
//if($con->query($sqlCreateTable)) {
//    echo "Table Created";
//}else {
//    echo "Error during creation table : " . $con->error; ;
//}
//$sqlCreateTable = "CREATE TABLE IF NOT EXISTS categories (
//id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//name VARCHAR (255)
//)";
//if($con->query($sqlCreateTable)) {
//    echo "Table Created";
//}else {
//    echo "Error during creation table : " . $con->error; ;
//}

$sqlCreateTable = "ALTER TABLE products ADD category_id INT(11) UNSIGNED";
$sqlCreateTable = "ALTER TABLE products ADD CONSTRAINT category_product FOREIGN KEY (category_id) REFERENCES categories(id);";
//if($con->query($sqlCreateTable)) {
//    echo "Table Created";
//}else {
//    echo "Error during creation table : " . $con->error; ;
//}
$data = [
    ['id' => 1,
        'name' => 'Jrexen'],
    ['id' => 2,
        'name' => 'Hagust'],
]
?>

<form action="">
    <input type="text" placeholder="Name">
    <input type="text" placeholder="price">
    <select name="category_id">
        <?php foreach($data as $category) {  ?>
            <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
        <?php } ?>
    </select>
    <button type="submit">Submit</button>
</form>
<!--<script>-->
<!--    ajax{-->
<!--        categoires ;-->
<!--    }-->
<!--</script>-->
