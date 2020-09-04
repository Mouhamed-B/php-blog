<?php

$host = 'localhost';
$dbname = 'blog';
$user = 'root';
$passwd = '';

try
{
    $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $passwd);
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>