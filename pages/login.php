<?php include "../modules/startBlock.php" ?>
<?php include "../functions/login.php" ?>
<?php include "../functions/register.php" ?>

    <div class="container">

        <h1>Inscription / connexion</h1>
        <p>Vous ne pouvez pas accéder au site sans être inscrit</p>

        <div class="divider"></div>

        <div class="row">

            <div class="col-md-5 col-6 box">

                <form method="POST">

                    <h3>Inscription</h3>

                    <div class="smallDivider"></div>

                    <input type="text" name="registerName" placeholder="Nom d'utilisateur">

                    <input type="password" name="registerPass" placeholder="Mot de passe">

                    <br>

                    <input type="submit" class="valider" name="registerSubmit" value="S'inscrire">

                </form>

            </div>

            <div class="col-2 d-none d-md-block">
                <h2 class="text-center" style="margin-top: 120px">OU</h2>
                <div class="smallDivider"></div>
            </div>

            <div class="col-md-5 col-6 box">

                <form method="POST">

                    <h3>Connexion</h3>

                    <div class="smallDivider"></div>

                    <input type="text" name="username" value="<?php echo $name; ?>" placeholder="Nom d'utilisateur">

                    <input type="password" name="password" value="<?php echo $pass; ?>" placeholder="Mot de passe">

                    <br>

                    <input type="submit" class="valider" name="submitbutton" value="Se connecter">

                </form>

            </div>

        </div>

        <br>

        <h2>Les avantages des membres :</h2>

        <br>

        <small>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde, blanditiis velit aliquam facere explicabo veritatis nemo ex dolorem, beatae doloribus natus autem provident quae aspernatur vitae dignissimos. Laudantium quam ullam quibusdam? Rerum laudantium possimus nesciunt debitis placeat non totam sit, aliquam deleniti libero molestiae saepe similique quibusdam corrupti itaque expedita quidem veniam temporibus</small>
    
    </div>

    <?php include "../modules/endBlock.php" ?>