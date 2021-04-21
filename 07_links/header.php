<?php
    include_once './functions.php';
    $page_title = "Links";
    if(isset($_GET['page'])) {
        $page_title = get_title(get_page_num());
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $page_title; ?> | Assignment 07</title>
    <link rel="stylesheet" href="/styles/index.css">
</head>
<body>
    <h1>Assignment 07</h1>
    <h2>Links</h2>
    <article>

