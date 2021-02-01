<?php
    $user = "postgres";
    $pwd = "12345678";
    $host = "localhost";
    $database = "teste";
    $port = '5432';



    $db_handle = pg_connect("host=localhost dbname=teste user=postgres password=12345678");
    
    if ($db_handle) {
    
    echo 'Connection attempt succeeded.';
    
    } else {
    
    echo 'Connection attempt failed.';
    
    }
    
    pg_close($db_handle);
    
    ?>






