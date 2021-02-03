<?php

$sql = "SELECT * FROM loginform;";

$result = mysqli_query($conn, $sql);

$resultCheck = mysqli_num_rows($result);

/*
if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        $haveResults = true;
    }
}else{
    $haveResults = false;
}
*/

//$row = mysqli_fetch_assoc($result);

$name = $_POST['username'];
$pass = $_POST['password'];
$submitbutton = $_POST['submitbutton'];
$success = false;

if($submitbutton){
    if(!empty($name) && !empty($pass)){
        while($row = mysqli_fetch_assoc($result)){
            if($name == $row['User'] && $pass == $row['Pass']){
                $success = true;
                $hasLoggedIn = "true";
                $loggedInLocation = $_SERVER['REQUEST_URI']."?loggedin"."?*name=".$name;
                header("Location: $loggedInLocation");
            }
        }
        if($success){
            echo "<div class='success'>Connecté !</div>";
            setcookie("name", $name);
        }else{
            echo "<div class='erreur'>Connection échoué !</div>";
        }
    }else if(empty($name) && empty($pass)){
        echo "<div class='erreur'>le <b>nom d'utilisateur</b> et le <b>mot de passe</b> sont obligatoire</div>";
    }else if(empty($name)){
        echo "<div class='erreur'>le <b>nom d'utilisateur</b> est obligatoire</div>";
    }else if(empty($pass)){
        echo "<div class='erreur'>le <b>mot de passe</b> est obligatoire</div>";
    }else{
        echo "Une erreur c'est produite";
    }
}

?>