<?php

    require "config.php";

    function connect_to_db() {

        require "config.php";

        global $user, $password, $db, $server, $port, $connection;

        $connection = mysqli_connect($server, $user, $password, $db, $port);

        if (!$connection) {
            die("<div class='alert-message'>Connection failed: ".mysqli_connect_error()."</div>");
        }

    }

    function store_form_data($name, $surname, $email) {

        require "config.php";

        global $user, $password, $db, $server, $port, $connection;
        $query_result;

        $connection = mysqli_connect($server, $user, $password, $db, $port);

        if (!$connection) {
            die("<div class='alert-message'>Connection failed: ".mysqli_connect_error()."</div>");
        }

        $query = "INSERT INTO users(first_name, last_name, email_address) VALUES('$name', '$surname', '$email')";
        mysqli_query($connection, $query);

    }

    function check_duplicate_record($name, $surname, $email) {

        require "config.php";

        global $user, $password, $db, $server, $port, $connection;
        $queryResult;
        $querySelect;

        $connection = mysqli_connect($server, $user, $password, $db, $port);

        if (!$connection) {
            die("Connection failed: ".mysqli_connect_error()."\n\n");
        } else {
            echo "Connected.\n\n";
        }

        $querySelectName = "SELECT first_name, last_name FROM users WHERE first_name = '$name' AND last_name = '$surname'";
        $querySelectEmail = "SELECT email_address FROM users WHERE email_address = '$email'";
        $firstID = "SELECT id FROM users WHERE id = 1";
        
        $queryResultName = mysqli_query($connection, $querySelectName);
        $queryResultEmail = mysqli_query($connection, $querySelectEmail);        
        $queryfirstID = mysqli_query($connection, $firstID);

        if ($queryfirstID -> num_rows == 1) {
            while ($rowFirst = mysqli_fetch_assoc($queryfirstID)) {

                echo "Original ID: ";
                print_r($rowFirst['id']);

            }
        }
        
        if ($queryResultName -> num_rows == 1) {
            while ($rowName = mysqli_fetch_assoc($queryResultName)) {

                if ($rowName['first_name'] == $name && $rowName['last_name'] == $surname) {
                    echo "\nThat name-surname combination exists in the database already.\n";
                }

            }

        }
        
        if ($queryResultEmail -> num_rows == 1) {
            while ($rowEmail = mysqli_fetch_assoc($queryResultEmail)) {

                if ($rowEmail['email_address'] == $email) {
                    echo "\nThat email exists in the database already.\n";
                }

            }

        }

        if ($queryResultName -> num_rows == 0 && $queryResultEmail -> num_rows == 0) {
            store_form_data($name, $surname, $email);
            echo "\nInserted into the database.\n";
        }

        

    }

?>