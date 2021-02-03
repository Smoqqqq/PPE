<?php

$sql = "SELECT * FROM loginform;";

$result = mysqli_query($conn, $sql);

$password = $_POST['registerPass'];
$username = $_POST['registerName'];
$submitRegister = $_POST['registerSubmit'];

if($submitRegister){
    if(!empty($password) && !empty($username)){
        $query_register = "INSERT INTO `loginform` (`ID`, `User`, `Pass`) VALUES (NULL, '$username', '$password')";
        mysqli_query($conn, $query_register);
    }
}

?>