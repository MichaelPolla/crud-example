<html>
    <head>
        <meta charset="UTF-8">
        <title>Config</title>
    </head>
    <?php
    // don't forget to change these parameters if necessary
    $dbHost = 'localhost';
    $dbName = 'demo';
    $dbUsername = 'root';
    $dbPassword = 'root';

    try{
        $db = new PDO("mysql:host={$dbHost};dbname={$dbName}", $dbUsername, $dbPassword);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $e) {
        echo $e->getMessage();
    }  
    ?>
<html>