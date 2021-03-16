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
        let achats = document.getElementsByClassName('suiviAchat');
        let left = [];
        for (let i = 0; i < images.length; i++) {
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

<?php include "../modules/endBlock.php" ?>