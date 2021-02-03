<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

$hasLoggedIn = false;

$count = 0;

?>

<script>
    let books = document.getElementsByClassName("livre");
</script>