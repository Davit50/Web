<?php
$post_arr = [];
$err_array = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['name'] == '') {
        $err_array['name'] = 'Name Field is Required';
    } else {
        $post_arr['name'] = $_POST['name'];
    }
    if ($_POST['surname'] != '') {
        $post_arr['surname'] = $_POST['surname'];
    }
    if ($_POST['email'] == '') {
        $err_array['email'] = 'Email Field is Required';
    } else {
        $post_arr['email'] = $_POST['email'];
    }
    if ($_POST['password'] == '') {
        $err_array['password'] = 'Password Field is Required';
    } else {
        $post_arr['password'] = $_POST['password'];
    }

}

var_dump('Errors are',$err_array);
var_dump('Input are',$post_arr);


?>











