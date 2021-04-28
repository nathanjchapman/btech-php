<?php

function confirm_result_set($result_set) {
    if (!$result_set) {
        exit("Database query failed.");
    }
}

// SELECT

function db_all($table, $columns='*') {
    global $db;

    $query_string = "SELECT $columns FROM $table";
    $result_set = mysqli_query($db, $query_string);
    confirm_result_set($result_set);
    return $result_set;
}

function db_filter($table, $filter, $columns='*') {
    global $db;

    $query_string = "SELECT $columns FROM $table WHERE $filter";
    $result_set = mysqli_query($db, $query_string);
    confirm_result_set($result_set);
    return $result_set;
}

// INSERT

function db_insert($table, $key_values) {
    global $db;

    $query_string = "INSERT INTO $table SET $key_values";
    $result = mysqli_query($db, $query_string);
    return $result;

}

// UPDATE

function db_update($table, $filter, $key_values) {
    global $db;

    $query_string = "UPDATE $table SET $key_values WHERE $filter";
    $result = mysqli_query($db, $query_string);
    return $result;
}

// DELETE

function db_delete($table, $filter) {
    global $db;

    $query_string = "DELETE FROM $table WHERE $filter";
    $result = mysqli_query($db, $query_string);
    return $result;
}

?>
