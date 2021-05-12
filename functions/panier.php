<?php

$panier = explode('  ', htmlspecialchars($_COOKIE['panier']));
$quantity = explode('  ', htmlspecialchars($_COOKIE['quantity']));
$progress = explode('  ', htmlspecialchars($_COOKIE['progress']));
$city = explode('  ', htmlspecialchars($_COOKIE['city']));

if (isset($_COOKIE['buyDates'])) {
    //echo $_COOKIE['buyDates'].'<br>';
    $date = date("H:i");
    $hours = strval(intval($date) + 1) . 'h';
    $minSec = explode(':', $date);
    $minSec = $minSec[1];
    $date = date('d/m/Y') . ', ' . $hours . $minSec;
    //echo $date;
    $dateCookie = explode('  ', $_COOKIE['buyDates']);
    for ($i = 0; $i < count($dateCookie); $i++) {
        $cookie = explode(':', explode(' ', $dateCookie[$i])[1])[0];
        if ($cookie - (date('H') + 2) < 0) {
            $progress[$i] = $progress[$i] + 1;
            echo "<script>
                window.onload = () => {
                    document.getElementsByClassName('bar')[$i].setAttribute('data-barprogress', '$progress[$i]');
                    progressBarResize();
                }
            </script>";
        }
    }
}

for ($i = 0; $i < count($panier); $i++) {
    $timeLeft[$i] = 4 - $progress[$i];
    $style = (($i % 2) != 0) ? 'style="background: rgba(0, 0, 0, 0.5)"' : "";
    echo
    '<div class="row suiviAchat"' . $style . '>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-8 title"><i class="fas fa-book"></i> ' . $panier[$i] . '</div>
                    <div class="col-sm-4"><i class="fas fa-layer-group"></i> Quantité : ' . $quantity[$i] . '</div>
                </div>   
                <div class="row">
                    <div class="col-sm-8"><i class="fas fa-shipping-fast"></i> Arrivée prévue dans : ' . $timeLeft[$i] . ' Jours</div>
                    <div class="col-sm-4"><i class="fas fa-map-marker"></i> Site : ' . $city[$i] . '</div>
                </div>    
                <div class="row">
                    <div class="col-sm-8"><i class="fas fa-history"></i> Commande passé le : '.$dateCookie[$i].'</div>
                    <div class="col-sm-4"><i class="fas fa-tags"></i> Prix payé : 8.99€</div>
                </div>      
            </div>
            <div class="col-sm-4">
                <div class="container-fluid" style="padding: 0px; padding-top: 15px">
                    <div class="row loadingBar">
                        <div class="etape text-center" title="étape 1 : commande"><p>1</p></div>
                        <div class="etape text-center" title="étape 2 : livraison"><p>2</p></div>
                        <div class="etape text-center" title="étape 3 : retrait"><p>3</p></div>
                        <div class="bar" data-barProgress="' . $progress[$i] . '"></div>
                    </div>
                </div>              
            </div>
            <img src="" class="bookImg" style="display: none;">
        </div>';
    /* $query_register = "INSERT INTO `achats` (`ID`, `title`, `progress`, `quantity`) VALUES (NULL, 'addslashes($panier[$i])', 'addslashes($progress[$i])', 'addslashes($quantity[$i])')";
    mysqli_query($conn, $query_register); */
}
