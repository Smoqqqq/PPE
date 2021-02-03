<div class="container-fluid" id="navbar">
    <div class="row">
        <div class="col-sm-6">
            <div class="row">
                <span class="navspan"><a class="nav" href="../pages/index">Accueil</a></span>
                <span class="navspan"><a class="nav" href="../pages/biblio">Bibliothèque</a></span>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row">
                <span class="navspan" id="login"><a href="../pages/login" class="nav">Se connecter / s'inscrire</a></span>
                <span class="navspan" id="panier"><a class="nav" href="../pages/panier">Panier</a></span>

                <div id="connected" class="row">
                    <p id="nom"></p>
                    <a href="" id="disconnect" onclick="disconnect()">se déconnecter</a>
                </div>    
            </div>
        </div>
    </div>
</div>

<script>
    if(document.cookie.includes('loggedIn=true')){
        document.getElementById("login").style.display = "none";
    }else{
        document.getElementById("login").style.display = "block";
    }
</script>