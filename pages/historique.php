<?php include "../modules/startBlock.php" ?>
<?php include "../functions/dbBookPrint.php" ?>
<?php printFullDB("display: none;") ?>

<div class="container bg-gray">
    <div class="row">
        <div class="col-sm-3" id="menu">
            <h1>Historique</h1>
            <div class="divider"></div>
            <a href="#purchases" class="paramMenu" id="toggleHistory">Historique des achats</a><br><br>
            <a class="paramMenu text-danger" onclick="disabledHistory()" id="toggleHistory">Désactiver l'historique</a>
        </div>
        <div class="col-sm-9">
            <div id="history">
                <br><br>
                <h2 class="text-center">Historique</h2>
                <div class="smallDivider"></div>
                <br>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-10">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-5">
                                    <p>Titre</p>
                                </div>
                                <div class="col-4"><small class="text-danger"><a onclick="askForSupression('all')">Tout supprimer</a><br><a id="supprSelection" onclick="askForSupression('selected')">Supprimer la selection</a></small></div>
                                <div class="col-3">
                                    <p>Selectionner</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="historyContainer"></div>
                <div id="purchases"><br><br>
                    <h2>Historique des achats</h2>
                    <div class="divider"></div>
                    <?php
                    if (isset($_COOKIE['newpanier'])) {
                        $panier = explode('  ', htmlspecialchars($_COOKIE['newpanier']));
                        $quantity = explode('  ', htmlspecialchars($_COOKIE['newquantity']));
                        $city = explode('  ', htmlspecialchars($_COOKIE['newcity']));
                        $dateCookie = explode('  ', $_COOKIE['newbuyDates']);
                        $delivery = explode('  ', htmlspecialchars($_COOKIE['deliveryDate']));

                        for ($i = 0; $i < count($panier); $i++) {
                            echo
                            '<div class="row suiviAchat">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6 title"><i class="fas fa-book"></i> ' . $panier[$i] . '</div>
                                        <div class="col-sm-6"><i class="fas fa-layer-group"></i> Quantité : ' . $quantity[$i] . '</div>
                                    </div>   
                                    <div class="row">
                                        <div class="col-sm-6"><i class="fas fa-shipping-fast"></i> Livré le : ' . $delivery[$i] . '</div>
                                        <div class="col-sm-6"><i class="fas fa-map-marker"></i> Site : ' . $city[$i] . '</div>
                                    </div>    
                                    <div class="row">
                                        <div class="col-sm-6"><i class="fas fa-history"></i> Commande passé le : ' . $dateCookie[$i] . '</div>
                                        <div class="col-sm-6"><i class="fas fa-tags"></i> Prix payé : 8.99€</div>
                                    </div>      
                                </div>
                            </div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "../modules/endBlock.php" ?>