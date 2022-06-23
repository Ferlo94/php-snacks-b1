<?php


    if (strlen($_GET['name']) > 3 && filter_var($_GET['email'], FILTER_VALIDATE_EMAIL) && is_numeric($_GET['age'])) {
        echo "ACCESSOAUTORIZZATO";
    } else {
        echo "ACCESSO NEGATO";
    }

?>



