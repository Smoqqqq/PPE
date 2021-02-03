<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

$sql = "SELECT * FROM books;";

$result = mysqli_query($conn, $sql);

//add

$cover = $_POST['cover'];
$title = $_POST['title'];
$desc = $_POST['desc'];
$submitBook = $_POST['submitBook'];
if($submitBook){
    if(!empty($title) && !empty($desc) && !empty($cover)){
        $query_register = "INSERT INTO `books` (`book_id`, `title`, `description`, `cover`) VALUES (NULL, '$title', addslashes($desc), addslashes($cover))";
        mysqli_query($conn, $query_register);
    }else{
        echo "<e class='erreur'>Formulaire mal rempli</e>";
    }
}

mysqli_close($conn); 
?>