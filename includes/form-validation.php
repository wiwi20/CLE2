<?php
//Check if data is valid & generate error if not so
$errors = [];
if ($voornaam == "") {
    $errors['voornaam'] = 'Het veld is leeg';
}
if ($achternaam == "") {
    $errors['achternaam'] = 'Het veld is leeg';
}
if ($email == "") {
    $errors['email'] = 'Het veld is leeg';
}
if (!is_numeric($telefoonnummer) || strlen($telefoonnummer) != 10) {
    $errors['telefoonnummer'] = 'Year needs to be a number with the length of 10';
}
if ($telefoonnummer == "") {
    $errors['telefoonnummer'] = 'Het veld is leeg';
}
if ($personen < 4 || $personen > 8)
{
    $errors['personen'] = 'reserveren tussen de 4-8 personen';
}
if ($tijd < 17 || $tijd > "20:00")
{
    $errors['tijd'] = 'reserveren kan tussen de 17:00 uur - 20:00 uur';
}
if ($datum == "") {
    $errors['datum'] = 'Het veld is leeg';
}
if ($tijd == "") {
    $errors['tijd'] = 'Het veld is leeg';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors ['email'] = "vul een geldig email";
}