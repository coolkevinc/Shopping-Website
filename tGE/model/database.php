<?php
	//setup database connector
    $dsn = 'mysql:host=localhost;dbname=tGE';
    $username = 'tGE_user';
    $password = 'pa55word';

	//make connection, or catch the error message
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
