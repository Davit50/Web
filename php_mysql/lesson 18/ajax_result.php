.<?php
$response_array = [];
$errors_array = [];
if (strlen($_POST['name']) > 8) {
    array_push($response_array,$_POST['name']);
}else {
    array_push($errors_array,'length is invalid');

}
if (strlen($_POST['surname']) > 5) {
    array_push($response_array,$_POST['surname']);
}else {
    array_push($errors_array,'length is invalid');
}
echo json_encode([
    'error' => $errors_array,
    'success' => $response_array
]);
//echo json_encode($response_array);
