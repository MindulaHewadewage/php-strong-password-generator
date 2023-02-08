<?php

// Dati
$data = [
    'abcdefghilmnopqrstuvz',
    'ABCDEFGHILMNOPQRSTUVZ',
    '0123456789',
    '!/=*$'

];

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



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body class="bg-primary">
    <header class="container mt-4 text-center text-light">
        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>
    </header>

    <main class="small-container mt-5 ">
        <p>Lunghezza Password</p>
        <form action="" method="GET">
            <input type="number" name="password_length">
            <button class="btn btn-primary">Invia</button>
            <button type="submit" class="btn btn-secondary">annulla</button>
            
        </form>

        <h3><?=$password?></h2>
    </main>

</body>

</html>