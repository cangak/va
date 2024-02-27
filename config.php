<?php
$host = "localhost"; /* Host name */
$user = "pakdik"; /* User */
$password = "master10"; /* Password */
$dbname = "va"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
