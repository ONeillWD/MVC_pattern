<?php
    $dsn = 'mysql:host=localhost;dbname=web182oneil'; 
    $username = 'caoneill';
    $password = 'ChONe8087';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>