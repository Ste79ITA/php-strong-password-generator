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

$new_password = [];

function generate_password($password_length, &$new_password) {

    for ($i = 0; $i < $password_length; $i++) {
        $new_password[] = 1;

    }
}

generate_password($password_length, $new_password);
?>

<form action="" method="GET">
    <input type="text" name="password_length" placeholder="<?= $password_length?>"> Inserisci il numero di caratteri della password
    <input type="submit">
    <input type="submit" value="Reset">
</form>

<h2>La tua password é : <?= implode($new_password)?> </h1>
</body>
</html>