<?php
    $name = $_POST['name'];
    $surname = $_POST['surname'];

    if (empty($name) || empty($surname)) {
        echo "You didn't fill the form.";
    } else {
        echo 'Your name is: ' . $name . ' ' . $surname;
    }
?>