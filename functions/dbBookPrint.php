<?php 

$sql = "SELECT * FROM books;";

$result = mysqli_query($conn, $sql);

$title = [];
$desc = [];
$desc = array();
$cover = array();
$i = 0;

while($row = mysqli_fetch_assoc($result)){
    $title[$i] = $row['title'];
    $cover[$i] = $row['cover'];
    $desc[$i] = $row['description'];
    $i++;
}

function printFullDB($style){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "users";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbName);

    $sql = "SELECT * FROM books;";

    $result = mysqli_query($conn, $sql);

    $i = 0;

    while($row = mysqli_fetch_assoc($result)){
        
        $title[$i] = $row['title'];
        $cover[$i] = $row['cover'];
        $desc[$i] = $row['description'];

        ?>

        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$i] ?>'" <?php if($style) echo 'style="'.$style.'"' ?>>       
            <p class="titreLivre"><?php echo $title[$i] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$i] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small class="descSmall"><?php echo $desc[$i] ?></small>     
        </div>

        <?php
        
        $i++;

    }

}

?>