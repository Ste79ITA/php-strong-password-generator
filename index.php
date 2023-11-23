<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
</head>
<body>
    
<?php 

session_start();

include_once __DIR__ . '/functions.php';
include_once __DIR__ . '/passwordPage.php';

$password_length = $_GET['password_length'] ?? 0;

$new_password = '';



generate_password($password_length, $new_password);

$_SESSION["password"] = $new_password;
?>

<form action="" method="GET">
    <input type="number" name="password_length" placeholder="<?= $password_length?>"> Inserisci il numero di caratteri della password
    <input type="submit">
    <input type="submit" value="Reset">
</form>

</body>
</html>