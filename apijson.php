<?php
$array = array(
    '1' => 'Data1',
    '2' => array(
        '1' => 'Data2.1',
        '2' => array(
            '1' => 'data2.2.1',
            '2' => 'data2.2.2',
            '3' => 'data2.2.3',
        ),
    ),
    '3' => array(
        '3' => 'data3.1'
    ),
    '4' => 'Data4',
);

echo json_encode($array);

// $arraymulti = [
//     "1" => "Data1",
//     "2" => "Data2",
//     ["data" => "Data"]
// ];

// echo json_encode($arraymulti);
