<?php

    require "data/functions.php";

    $name;
    $surname;
    $email;

    $name = $_POST['Name'];
    $surname = $_POST['Surname'];
    $email = $_POST['Email'];

    if (($name && $surname && $email) != null) {
        check_duplicate_record($name, $surname, $email);
    }

?>