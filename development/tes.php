<?php

// for($i = 'a'; $i <= 'z'; $i++) print "$i ";

// for ($x = 'a'; $x <= 'z'; $x++) {
//     echo "The number is: $x <br>";
// }

// $str = 'ZA';
// var_dump(str_decrement($str)); // 'YZ'

// $letter = 'A';
// $letterAscii = ord($letter);
// $letterAscii++;
// $letter = chr($letterAscii); // 'B'

// $i = 'a';

// for( $i; $i < 'z'; $i++ )
//     print($i);


// $alphabet = range('a', 'z');
// echo implode($alphabet); 

// $angka = 1; // misal dari slider (1-26)
// $huruf = chr(64 + $angka);

// echo $huruf; // Output: A

for ($i = 1; $i <= 26; $i++) {
    $huruf = chr(64 + $i);
    echo $huruf . "<br>";
}

?>