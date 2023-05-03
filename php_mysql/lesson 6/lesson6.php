<?php
$products = [
    'Home' => [
        'name' => 'Banan',
        'price' => 2000
],
    'About' => [
        'name' => 'Apelsin',
        'price' => 300
],
    'Contact' => [
        'name' => 'Xndzor',
        'price' => 544
]
];
?>
<?php foreach($products as $key => $value) {  ?>
    <div>
        <label for="">
            Product Name
        </label>
        <span><?= $value['name'] ?></span>
        <label for="">
            Product Price
        </label>
        <span><?= $value['price'] ?></span>
    </div>
<?php } ?>
<script>
    alert("hello")
</script>

