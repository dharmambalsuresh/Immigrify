<?php
/*
 * @file: db.php
 * @author: Immigrify
 * @year: 2019
 * @description: CSCI 4193 (Fall 2019) This file sets up a connection to the database.
 */
$db_host = "localhost";
$db_username = "root";
$db_password = "root";
$db_name = "immigrify";

$conn = new mysqli ($db_host, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die ("Error connecting to the DB.<br>" . $conn->connect_error);
}
/* Debugging Purposes Only
else {
    echo "Connected!";
} */
?>