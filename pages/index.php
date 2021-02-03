<?php include "../modules/startBlock.php" ?>
<?php include "../functions/dbBookPrint.php" ?>

    <div class="container">
    
        <h1>Bienvenue à la bibliothèque !</h1>

        <div class="divider"></div>
        
        <h4>Accueil</h4>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia ex asperiores ipsa fugiat amet, sed voluptatum, cupiditate repellendus reiciendis molestiae, ratione voluptates tenetur labore quidem voluptatibus omnis itaque reprehenderit incidunt velit quos explicabo veritatis minima vitae ad. Repudiandae velit nemo numquam totam aliquid illum dolorem iste labore, architecto quam accusantium!</p>
    
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
    
        <h2 class="my-4">Les Livres du moment</h2>
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

    <?php include "../modules/endBlock.php" ?>