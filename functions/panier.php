<?php 

$sql = "SELECT * FROM achats;";

$result = mysqli_query($conn, $sql);

//add

$panier = explode('  ', htmlspecialchars($_COOKIE['panier']));
$quantity = explode('  ', htmlspecialchars($_COOKIE['quantity']));
$progress = explode('  ', htmlspecialchars($_COOKIE['progress']));
$city = explode('  ', htmlspecialchars($_COOKIE['city']));

for($i = 0; $i < count($panier); $i++){
    echo 
        '<div class="row">
            <div class="col-sm-4">' . $panier[$i] . '</div>
            <div class="col-sm-2">Quantité : '.$quantity[$i].'</div>
            <div class="col-sm-2">Site : '.$city[$i].'</div>
            <div class="col-sm-4">
                <div class="container-fluid" style="padding: 0px;">
                    <div class="row loadingBar">
                        <div class="etape text-center" title="étape 1 : commande"><p>1</p></div>
                        <div class="etape text-center" title="étape 2 : livraison"><p>2</p></div>
                        <div class="etape text-center" title="étape 3 : retrait"><p>3</p></div>
                        <div class="bar" data-barProgress="'.$progress[$i].'"></div>
                    </div>
                </div>              
            </div>
        </div><br>'; 
    $query_register = "INSERT INTO `achats` (`ID`, `title`, `progress`, `quantity`) VALUES (NULL, addslashes($panier[$i]), addslashes($progress[$i]), addslashes($quantity[$i]))";
    mysqli_query($conn, $query_register);
}

/* 
    $sql = "SELECT * FROM achats;";
    $result = mysqli_query($conn, $sql);
    $DBtitle = array();
    $DBprogress = array();

    $panier = htmlspecialchars($_COOKIE["panier"]);
    $panier = explode("  ", $panier);
    $quantity = array();

    while($row = mysqli_fetch_assoc($result)){
        $DBtitle[$i] = $row['title'];
        $DBprogress[$i] = $row['progress'];

        for($x = 0; $x < count($panier); $i++){
            if(!strpos($panier[$x])){ 
                $panier[count($panier + 1)] = $DBtitle[$i]; 
            }else{
                $quantity[$x]++;
            }
        }
        $progress[count($panier + 1)] = $DBprogress[$i]; 

        $i++;
    }

    $progress = array(1, 2, 3);

    function printBuy(){

        for($i = 0; $i < count($panier); $i++){
            echo 
            '<div class="row">
                <div class="col-sm-6">' . $panier[$i] . '</div>
                <div class="col-sm-6">
                    <div class="container-fluid" style="padding: 0px;">
                        <div class="row loadingBar">
                            <div class="etape text-center" title="étape 1 : commande"><p>1</p></div>
                            <div class="etape text-center" title="étape 2 : livraison"><p>2</p></div>
                            <div class="etape text-center" title="étape 3 : retrait"><p>3</p></div>
                            <div class="bar" data-barProgress="'.$progress[$i].'"></div>
                        </div>
                    </div>              
                </div>
            </div><br>';  

            $query_register = "INSERT INTO `achats` (`ID`, `title`, `progress`) VALUES (NULL, $panier[$i], $progress[$i])";
            mysqli_query($conn, $query_register);
        }

    }
    
    if(count($panier) > 0)
 */
?>