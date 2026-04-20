<?php
$jummlahsubkelas = 2;

for ($i = 1; $i <= $jummlahsubkelas; $i++) 
    {
        $huruf=chr(64 + $i);
        echo '<span>' . $huruf . '</span>' ;
    }
?>