<?php

$animals = ["k"=>"kucing","a"=>"ayam","b"=>"banteng","i"=>"ikan"];
echo "ini hewan : " .$animals["k"];
echo "</br>";
echo "ini hewan : " .$animals["b"];
echo "</br>";
// mencetak seluruh data array gunakan looping foreach
foreach ($animals as $animal) {
    echo '<li>'.$animal.'</li>';
}