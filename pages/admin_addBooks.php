<?php include "../modules/startBlock.php" ?>
<?php include "../functions/addBooks" ?>

<div class="container box">

    <h1>Ajouter des livres à la base de donnée</h1>

    <div class="divider" style="margin-left: auto; margin-right: auto"></div>

    <form method="POST" enctype="multipart/form-data">

        <input type="text" name="cover" id="cover" placeholder="Lien de l'image de couverture" style="width: 60%;">
        
        <input type="text" name="title" id="title" placeholder="Titre du livre" style="width: 60%;">

        <input type="text" name="desc" id="desc" placeholder="Description du livre" style="width: 60%;">
        <br>
        <input type="submit" class="valider" name="submitBook" value="Ajouter le livre">

    </form>

</div>

<?php include "../modules/endBlock.php" ?>

<script>
    if(getCookieVal('name') != "admin"){
        alert("Vous devez être administrateur pour accéder à cette page.\n vous allez être redirigé.");
        window.location.href="index";
    }
</script>