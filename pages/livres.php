<?php include "../modules/startBlock.php" ?>
<?php include "../functions/dbBookPrint.php" ?>

<div class="container">
    
    <h1>Bibliothèque</h1>

    <p>Complète <a href="biblio" class="text-secondary" style="float: right; text-transform: uppercase;">Accéder à la bibliothèque par catégories <i class="fas fa-arrow-right"></i></a></p>

    <div class="divider"></div>

    <div class="searchBar row">
        <div class="col-6"><input type="text" name="search" placeholder="Rechercher" id="search"></div>
        <div class="col-6"><a class="button" id="searchButton">Rechercher</a></div>
        <br>
    </div>

</div>

<div class="container">

    <div class="meilleurVentes row">

    <?php printFullDB("display: block") ?>
        
    </div>

</div>

<div class="container">
    <br>
<a href="biblio" class="text-secondary" style="float: right; text-transform: uppercase;">Accéder à la bibliothèque par catégories <i class="fas fa-arrow-right"></i></a>
</div>

<script defer src="../ressources/js/search.js"></script>
<?php include "../modules/endBlock.php" ?>