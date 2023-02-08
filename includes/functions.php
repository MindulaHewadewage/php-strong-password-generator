<?php 

// recupero la password
$password_length = $_GET['password_length'] ?? '';

// dichiaro la varibaile password
$password='';
for($i = 0;$i<$password_length;$i++){
    $selezione = rand(0,3);
    $last=strlen($data[$selezione]) - 1;
    $password .=$data[$selezione][rand(0,$last)];
}



?>