<?php

require 'Helloinfbase.php';
    
    $link =  mysqli_connect(host, base_name, base_password)
        or die("<p> Error: " . mysql_error() . "</p>");
    
    mysqli_select_db($link, base_login) 
        or die("<p>Error with connecting db" . mysql_error() . "</p>");
    
    ?>s