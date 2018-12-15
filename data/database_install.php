<?php

    require "config.php";
    require "get_SQL_script.php";

    global $server, $user, $password, $port, $db, $getSQLscript;

    $connection = mysqli_connect($server, $user, $password, "", $port);

    if (!$connection) {
        die("<h1>Connection failed: ".mysqli_connect_error()."</h1><br>");

    } else {
        echo "<h1>Connected.</h1><br>";
    }

    if (mysqli_multi_query($connection, $getSQLscript)) {
        echo "<h2>Database and tables were created . . .</h2><br>";  

    } else {
        echo "<h2>The database and/or tables couldn't be created. . .</h2><br>";
    }

    mysqli_close($connection);

?>