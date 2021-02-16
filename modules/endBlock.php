<?php include "footer.php" ?>
<?php mysqli_close($conn); ?>

<script>

    let navPages = ["index", "biblio", "login", "panier"];
    let pages = ["index", "biblio", "login", "panier", "admin_addBooks", "livres", "historique", "suivi-achat"];
    let pageTitle = ["Accueil", "Bibliothèque", "S'enregistrer", "panier", "Ajouter des livres", "Bibliothèque complète", "Historique", "suivi-panier"];
    let span = document.getElementsByClassName("navspan");

    window.addEventListener("DOMContentLoaded", () => {
        for(let i = 0; i < navPages.length; i++){
            if(window.location.href.includes(navPages[i])){
                span[i].classList.add("active");
            }else{
                span[i].classList.remove("active");
            }
        }
        for(let i = 0; i < pages.length; i++){
            if(window.location.href.includes(pages[i])){
                document.title = pageTitle[i];
            }
        }
    })
    
</script>

<script type="text/javascript" src="../ressources/js/bootstrap-filestyle.min.js"></script>
<script type="text/javascript" src="../ressources/js/panier.js"></script>
<script src="../ressources/js/darkmode.js"></script>

</body>
</html>