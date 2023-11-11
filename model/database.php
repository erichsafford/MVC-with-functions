<?php
    $dsn = 'mysql:host=localhost;dbname=world';
    $username = 'root';
    // $password = 'password';

    try {
        $db = new PDO($dsn, $username);
        // $db = new PDO($dsn, $username, $password)
    } catch (PDOException $err) {
        $error_message = 'Database error: ';
        $error_message .= $err->getMessage();
        include('view/error.php');
        exit();
    }
