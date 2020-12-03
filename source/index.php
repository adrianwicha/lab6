<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>ADRIAN WICHA</title>
    </head>
    <body>
<div>
<?php
    $serverName = "mysql";
    $userName = "root";
    $password = "admin123";
    $conn = new mysqli($serverName, $userName, $password);
    if ($conn->connect_errno)
        printf($conn->connect_error);
    else {
        $results = $conn->query('SHOW databases;');

        while($row = $results->fetch_assoc())
            $schemas[] = $row['Database'];
?>
       <h3>Bazy danych:</h3>
       <ol>
            <?php foreach($schemas as $value)
                echo '<li>'.$value.'</li>';
    }
            ?>
        </ol>
</div>
    </body>
</html>
