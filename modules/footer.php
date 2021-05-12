<div class="container-fluid" id="footer">
    <div class="row">
        <div class="col-md-3">
            <h3 class="my-3 text-center">Bibliothèque</h3>
            <p class="text-center">Les livres de la bibliothèque viennent du site <a style="font-size: 20px" href="https://bibliotheques.paris.fr/">bibliotheques.paris.fr <i class="fas fa-arrow-right"></i></a></p>
        </div>
        <div class="col-md-3" style="border-left: 1px solid var(--orange)">
            <h3 class="my-3 text-center">PPE</h3>
            <p class="text-center">Cette Bibliothèque est un projet de PPE</p>
            <p class="text-center"><b>Auteurs :</b></p>
            <p class="text-center">Paul Le Flem | Alexis Fredriksen</p>
        </div>
        <div class="col-md-6" style="border-left: 1px solid var(--orange)">
            <h3 class="my-3 text-center">Liens utiles</h3>
            <div class="row">
                <div class="col-4">
                    <p class="navspan footernav"><a href="../pages/login" class="nav footerNavA">Connexion<a></p>
                    <p class="navspan footernav"><a href="../pages/index" class="nav footerNavA">Accueil<a></p>
                </div>
                <div class="col-4">
                    <p class="navspan footernav"><a href="../pages/biblio" class="nav footerNavA">Bibliothèque par catégories</a></p>
                    <p class="navspan footernav"><a href="../pages/livres" class="nav footerNavA">Bibliothèque complète</a></p>
                </div>
                <div class="col-4">
                    <p class="navspan footernav"><a href="../pages/historique" class="nav footerNavA">Historique<a></p>
                    <p class="navspan footernav"><a class="nav footerNavA" href="<?php if (!isset($_COOKIE['progress']) || $_COOKIE['progress'] == '' || $_COOKIE['city'] == "" || $_COOKIE['city'] == "undefined") {
                                                                                    echo '../pages/panier';
                                                                                } else {
                                                                                    echo '../pages/suivi-achat';
                                                                                }
                                                                                ?> ">Panier</a></p>  
                </div>
            </div>
        </div>    
    </div>
</div>