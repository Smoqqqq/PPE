<?php include "../modules/startBlock.php" ?>
<?php include "../functions/dbBookPrint.php" ?>
<?php printFullDB("display: none") ?>

    <div class="container">

        <h1>Suivi achat</h1>

        <div class="divider"></div>

        <div class="bg-gray" id="suiviAchat">

            <?php include "../functions/panier.php" ?>

            <!--  <div class="row">
                <div class="col-sm-6">article dans le panier</div>
                <div class="col-sm-6">
                    <div class="container-fluid" style="padding: 0px;">
                        <div class="row loadingBar">
                            <div class="etape text-center" title="étape 1 : commande"><p>1</p></div>
                            <div class="etape text-center" title="étape 2 : livraison"><p>2</p></div>
                            <div class="etape text-center" title="étape 3 : retrait"><p>3</p></div>
                            <div class="bar" data-barProgress="3"></div>
                        </div>
                    </div>              
                </div>
            </div><br> -->

        </div>

        <!--
        <div id="containerValider">

            <a href="" class="valider" id="validerPanier">Valider votre panier</a>

        </div>
        -->

        <br><br>

    </div>

    <script>

        function progressBarResize(){
            let progressBar = document.getElementsByClassName("bar");
            let loadingBar = document.getElementsByClassName("loadingBar");
            for(let i = 0; i < progressBar.length; i++){
                let progress = progressBar[i].getAttribute("data-barProgress");
                switch(progress){
                    case "1":
                        progressBar[i].style.right = String(loadingBar[i].getBoundingClientRect().width * 0.84 + "px");
                        break;
                    case "2":
                        progressBar[i].style.right = String(loadingBar[i].getBoundingClientRect().width * 0.50 + "px");
                        break;
                    case "3":
                        progressBar[i].style.right = String(loadingBar[i].getBoundingClientRect().width * 0.18 + "px");
                        break;
                    case "4":
                        progressBar[i].style.right = "0px";
                        break;
                    case 'default':
                        progressBar[i].style.right = "0px";
                        break;
                }
            }
        }

        window.addEventListener('resize', () => {progressBarResize()})
        document.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                progressBarResize()
            }, 20);
        })
        
    </script>

<?php include "../modules/endBlock.php" ?>