<?php include "../modules/startBlock.php" ?>

    <div class="container" id="panierContainer">

        <h1>Panier</h1>

        <div class="divider"></div>

        <form type="POST">
        <div id="itemPanier" class="bg-gray">

        <div class="row text-left" style="padding: 0px 85px 0px 85px">
            <div class="col-4"><p>Titre :</p></div>
            <div class="col-2 text-right" style="padding-right: 20px"><p>Action :</p></div>
            <div class="col-3" style="padding-left: 25px">Site physique :</div>
            <div class="col-2" style="padding-left: 20px;">Quantité :</div>
            <div class="col-1">Prix :</div>
        </div>

        </div>

        <div id="containerValider">

            <a href="suivi-achat" class="valider" id="validerPanier" onclick="validerPanier()">Valider votre panier</a>

        </div>

        <br><br>

    </div>

    <script src="../ressources/js/suiviPanier.js"></script>

<?php include "../modules/endBlock.php" ?>