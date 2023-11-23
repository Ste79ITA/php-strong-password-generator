<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
</head>
<body>
    
<form action="" method="GET">
    <input type="text" name="password_length"> Inserisci il numero di caratteri della password
    <input type="submit">
</form>

<?php 

$password_length = $_GET['password_length'] ?? 0;

$new_password = '';

function generate_password($password_length, &$new_password) {

    var_dump($password_length);
}

generate_password($password_length, $new_password);
?>
</body>
</html>