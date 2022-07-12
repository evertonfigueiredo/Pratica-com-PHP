<?php

$data = array(1, 1.1,NULL, 'foo');

for ($i=0; $i < count($data); $i++) { 
    echo "<br>";
    echo $data[$i];
}
// echo "<hr>";
// foreach ($data as $value) {
//     echo gettype($value)."<br>";
// }

// echo "<hr>";
// $a = 0;
// while ($a < count($data)) {
//     echo "<br>";
//     echo $data[$a];
//     $a++;
// }

// echo "<hr>";
// $a = 0;
// do {
//     echo "<br>";
//     echo $data[$a];
//     $a++;
// } while ($a < count($data));
