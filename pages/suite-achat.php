<?php include "../modules/startBlock.php" ?>

<div class="container">

    <h1>Réception du colis validé !</h1>
    <div class="divider"></div>

    <div class="bg-gray">
        <h2>Donnez nous votre avis</h2>
        <div class="divider"></div>
        <div id="grade">
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <textarea style="width: 100%; height: 100px" placeholder="J'ai aimé / pas aimé ce livre parce que..."></textarea><br><br>
        <div class="text-right"><a href="index" class="valider">Confirmer</a></div>
    </div>

</div>

<script>
    let stars = document.getElementsByClassName('fa-star');

    for (let j = 0; j < stars.length; j++)
        stars[j].addEventListener('click', () => {
            for(let i = 0; i < stars.length; i++){
                stars[i].classList.remove('selected');
                stars[i].classList.add('far');
                stars[i].classList.remove('fas');
            }
            for (let i = 0; i < j + 1; i++) {
                stars[i].classList.add('fas');
                stars[i].classList.remove('far');
                stars[i].classList.add('selected');
            }
        })
</script>

<style>
    #grade {
        margin: 20px 0px;
    }

    #grade i {
        font-size: 30px;
    }

    i.selected {
        color: gold;
    }
</style>

<?php include "../modules/endBlock.php" ?>