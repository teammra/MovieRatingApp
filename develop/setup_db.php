<?php

    // MySQL login info, change if does not reflect your current setup
    $host = 'localhost';
    $port = 3306;
    $user = 'root';
    $password = '';

    // connect to db
    $db = mysqli_connect("$host:$port", $user, $password);
    
    // read query from .sql file
    $query = file_get_contents("database_tables.sql");
    
    // run the query and print the result
    $result = $db->multi_query($query);
    
    // print result
    if ($result)
    {
        echo "Success!";
    }
    else
    {
        echo $db->error;
    }
    
?>