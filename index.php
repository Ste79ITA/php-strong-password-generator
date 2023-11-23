<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
</head>
<body>
    
<?php 

$password_length = $_GET['password_length'] ?? 0;

$new_password = '';

function generate_password($password_length, &$new_password) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ~`! @#$%^&*()_-+={[}]|\:;<>?/';
    for ($i = 0; $i < $password_length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $new_password .= $characters[$index];


    }
}

generate_password($password_length, $new_password);
?>

<form action="" method="GET">
    <input type="number" name="password_length" placeholder="<?= $password_length?>"> Inserisci il numero di caratteri della password
    <input type="submit">
    <input type="submit" value="Reset">
</form>

<h2>La tua password é : <?= $new_password?> </h1>
</body>
</html>