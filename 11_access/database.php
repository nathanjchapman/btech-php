<?php

require_once 'db_credentials.php';
require_once 'db_functions.php';

function db_connect() {
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    return $connection;
}

function db_disconnect($connection) {
    if (isset($connection)) {
        mysqli_close($connection);
    }
}

$db = db_connect();
if (mysqli_connect_errno()) {
    $error = mysqli_connect_error();
    header("Location:database_error.php?error=$error");
}

?>
