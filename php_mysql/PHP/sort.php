<?php
//
//$assocArray = [
//    'name' => [
//        'Artur',
//        'Vahe',
//        'Gevorg',
//        'Zarzand'],
//    'age' => 12,
//    'email' => 'test@mail.ru'
//];
//$assocArray2 = [
//    'name' => [
//        'Petros',
//        'Poxos',
//        'Harut',
//        'Artak'],
//    'age' => 12 ,
//    'email' => 'test@mail.ru'
//];
//
//
//$names = (array_merge($assocArray['name'],$assocArray2['name']));
//unset($assocArray2['name']);
//$end = (array_merge($names,$assocArray2));
//sort($end);
//echo '<pre>';
//print_r($end) ;
//echo '</pre>';


$assocArray = [
    'data' =>  [
        'name_values' => [ 'Vahe', ' Gevorg', 'Zarzand'],
        'age_values' => ['32 ', '22', '14', '66']
    ],
    [
        'age_values' => ['33 ', '66', '46', '23'],
        'name_values' => ['Martiros', 'Vahag', ' Artyom', 'Hamlet']
    ],
    [
        'name_values' => ['Haykuhi', 'Karen', ' Babken', 'Sevak'],
        'age_values' => ['33 ', '66', '46', '23']
    ]
];

$names = (array_merge($assocArray['data']['name_values'],$assocArray[0]['name_values'],$assocArray[1]['name_values']));

sort($names);
foreach($names as $f){
   echo $f;
   echo '<br>';
}



?>