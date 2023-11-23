<?php 

function generate_password($password_length, &$new_password) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ~`!@#$%^&*()_-+={[}]|\:;<>?/';
    for ($i = 0; $i < $password_length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $new_password .= $characters[$index];
         
    }
}
?>

