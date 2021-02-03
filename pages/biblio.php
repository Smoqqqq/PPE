<?php include "../modules/startBlock.php" ?>
<?php include "../functions/dbBookPrint.php" ?>

<div class="container">
    
    <h1>Bibliothèque</h1>

    <p>Par catégories <a href="livres" class="text-secondary" style="float: right; text-transform: uppercase;">Accéder à la bibliothèque complète <i class="fas fa-arrow-right"></i></a></p>

    <div class="divider"></div>

    <div class="searchBar row">
        <div class="col-6"><input type="text" name="search" placeholder="Rechercher" id="search"></div>
        <div class="col-6"><a class="button" id="searchButton">Rechercher</a></div>
    </div>

</div>

<div class="container">
    
    <h2 class="my-4">Nos meilleurs ventes</h2>

    <div class="divider"></div>

    <div class="meilleurVentes row">
        
        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$count] ?>'">       
            <p class="titreLivre"><?php echo $title[$count] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$count] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small><?php echo $desc[$count]; $count++;?></small>     
        </div>

        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$count] ?>'">         
            <p class="titreLivre"><?php echo $title[$count] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$count] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small><?php echo $desc[$count]; $count++;?></small>     
        </div>

        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$count] ?>'">        
            <p class="titreLivre"><?php echo $title[$count] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$count] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small><?php echo $desc[$count]; $count++;?></small>     
        </div>

        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$count] ?>'">         
            <p class="titreLivre"><?php echo $title[$count] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$count] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small><?php echo $desc[$count]; $count++;?></small>     
        </div>

        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$count] ?>'">         
            <p class="titreLivre"><?php echo $title[$count] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$count] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small><?php echo $desc[$count]; $count++;?></small>     
        </div>

    </div>

</div>

<div class="container">
    
    <h2 class="my-4">Sélection novembre 2030</h2>

    <div class="divider"></div>

    <div class="meilleurVentes row">
        
        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$count] ?>'">         
            <p class="titreLivre"><?php echo $title[$count] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$count] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small><?php echo $desc[$count]; $count++;?></small>     
        </div>
        
        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$count] ?>'">         
            <p class="titreLivre"><?php echo $title[$count] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$count] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small><?php echo $desc[$count]; $count++;?></small>     
        </div>

        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$count] ?>'">         
            <p class="titreLivre"><?php echo $title[$count] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$count] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small><?php echo $desc[$count]; $count++;?></small>     
        </div>

        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$count] ?>'">         
            <p class="titreLivre"><?php echo $title[$count] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$count] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small><?php echo $desc[$count]; $count++;?></small>     
        </div>

        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$count] ?>'">         
            <p class="titreLivre"><?php echo $title[$count] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$count] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small><?php echo $desc[$count]; $count++;?></small>     
        </div>

    </div>

</div>

<div class="container">
    
    <h2 class="my-4">Nouveautés</h2>

        <div class="divider"></div>

    <div class="meilleurVentes row">
        
        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$count] ?>'">         
            <p class="titreLivre"><?php echo $title[$count] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$count] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small><?php echo $desc[$count]; $count++;?></small>     
        </div>
        
        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$count] ?>'">         
            <p class="titreLivre"><?php echo $title[$count] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$count] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small><?php echo $desc[$count]; $count++;?></small>     
        </div>

        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$count] ?>'">         
            <p class="titreLivre"><?php echo $title[$count] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$count] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small><?php echo $desc[$count]; $count++;?></small>     
        </div>

        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$count] ?>'">         
            <p class="titreLivre"><?php echo $title[$count] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$count] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small><?php echo $desc[$count]; $count++;?></small>     
        </div>

        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$count] ?>'">         
            <p class="titreLivre"><?php echo $title[$count] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$count] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small><?php echo $desc[$count]; $count++;?></small>     
        </div>

    </div>
</div>

<div class="container">
    
    <h2 class="my-4">Coup De coeur</h2>

        <div class="divider"></div>

    <div class="meilleurVentes row">

        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$count] ?>'">         
            <p class="titreLivre"><?php echo $title[$count] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$count] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small><?php echo $desc[$count]; $count++;?></small>     
        </div>
        
        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$count] ?>'">         
            <p class="titreLivre"><?php echo $title[$count] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$count] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small><?php echo $desc[$count]; $count++;?></small>     
        </div>

        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$count] ?>'">         
            <p class="titreLivre"><?php echo $title[$count] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$count] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small><?php echo $desc[$count]; $count++;?></small>     
        </div>

        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$count] ?>'">         
            <p class="titreLivre"><?php echo $title[$count] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$count] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small><?php echo $desc[$count]; $count++;?></small>     
        </div>

        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$count] ?>'">         
            <p class="titreLivre"><?php echo $title[$count] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$count] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small><?php echo $desc[$count]; $count++;?></small>     
        </div>

    </div>

</div>

<div class="container">
    
    <h2 class="my-4">Roman</h2>

        <div class="divider"></div>

    <div class="meilleurVentes row">
        
        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$count] ?>'">         
            <p class="titreLivre"><?php echo $title[$count] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$count] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small><?php echo $desc[$count]; $count++;?></small>     
        </div>
        
        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$count] ?>'">         
            <p class="titreLivre"><?php echo $title[$count] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$count] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small><?php echo $desc[$count]; $count++;?></small>     
        </div>

        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$count] ?>'">         
            <p class="titreLivre"><?php echo $title[$count] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$count] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small><?php echo $desc[$count]; $count++;?></small>     
        </div>

        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$count] ?>'">         
            <p class="titreLivre"><?php echo $title[$count] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$count] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small><?php echo $desc[$count]; $count++;?></small>     
        </div>

        <div class="livre" title="Cliquez pour en savoir plus sur '<?php echo $title[$count] ?>'">         
            <p class="titreLivre"><?php echo $title[$count] ?></p>
            <div class="smallDivider"></div>
            <br>
            <img src="<?php echo $cover[$count] ?>" alt="livre" class="imgLivre img-thumbnail">
            <br>
            <small><?php echo $desc[$count]; $count++;?></small>     
        </div>

    </div>

</div>

<div class="container">
    <br>
    <a href="livres" style="float: right; text-transform: uppercase;" class="text-secondary">Accéder à la bibliothèque complète <i class="fas fa-arrow-right"></i></a>
</div>

<script defer src="../ressources/js/search.js"></script>
<?php include "../modules/endBlock.php" ?>