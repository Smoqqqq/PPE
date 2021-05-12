<?php include "../modules/startBlock.php" ?>
<?php include "../functions/dbBookPrint.php" ?>
<?php printFullDB("display: none") ?>

<div class="container">

    <h1>Suivi achat</h1>

    <div class="divider"></div>

    <div class="bg-gray" id="suiviAchat">

        <?php include "../functions/panier.php" ?>

    </div>

    <br><br>

</div>

<script>
    function progressBarResize() {
        let progressBar = document.getElementsByClassName("bar");
        let loadingBar = document.getElementsByClassName("loadingBar");
        for (let i = 0; i < progressBar.length; i++) {
            let progress = progressBar[i].getAttribute("data-barProgress");
            switch (progress) {
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

    window.addEventListener('resize', () => {
        progressBarResize()
    })
    document.addEventListener('DOMContentLoaded', () => {
        setTimeout(() => {
            progressBarResize()
        }, 20);
        let images = document.getElementsByClassName('bookImg');
        let bookImg = document.getElementsByClassName('imgLivre');
        let livresAchete = document.getElementsByClassName('title');
        let livres = document.getElementsByClassName('titrelivre');
        let achats = document.getElementsByClassName('suiviAchat');
        let left = [];
        for (let i = 0; i < images.length; i++) {
            for (let y = 0; y < livres.length; i++) {
                if (livresAchete[i].innerText == livres[y].innerText) {
                    let src = bookImg[y].getAttribute('src');
                    images[i].setAttribute('src', src);
                }
            }
            achats[i].addEventListener('mouseover', () => {
                left[i] = false;
                setTimeout(() => {
                    if (left[i]) return;
                    images[i].style.display = "block";
                }, 1500);
            });
            achats[i].addEventListener('mouseout', () => {
                left[i] = true;
            });
        }
    })
</script>

<div class="text-center"><a href="suite-achat" class="valider" id="confirm" onclick="clearCookies()">j'ai réceptionné le colis !</a></div>

<script>
    let confirm = document.getElementById('confirm');
    if (document.getElementsByClassName('received').length > 0) {
        confirm.style.display = "block";
    }

    function clearCookies() {
        document.cookie = "newpanier=";
            document.cookie = "newbuyDates=";
        document.cookie = "newquantity=";
        document.cookie = "newcity=";
        document.cookie = "deliveryDate=";

        let articles = document.getElementsByClassName('suiviAchat');
        document.cookie = "newpanier=" + getCookieVal('newpanier') + getCookieVal("panier");
        document.cookie = "newbuyDates=" + getCookieVal('newbuyDates') + getCookieVal("buyDates");
        document.cookie = "newquantity=" + getCookieVal('newquantity') + getCookieVal("quantity");
        document.cookie = "newcity=" + getCookieVal('newcity') + getCookieVal("city");
        for (let i = 0; i < articles.length; i++) document.cookie = "deliveryDate=" + getCookieVal('deliveryDate') + '  ' + '<?php echo date("d/m/Y"); ?>';

        document.cookie = "panier=;";
        document.cookie = "buyDates=;";
        document.cookie = "quantity=;";
        document.cookie = "progress=;";
        document.cookie = "city=;";
    }
</script>

<?php include "../modules/endBlock.php" ?>