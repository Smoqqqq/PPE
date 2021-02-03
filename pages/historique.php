<?php include "../modules/startBlock.php" ?>
<?php include "../functions/dbBookPrint.php" ?>
<?php printFullDB("display: none;") ?>

<div class="container bg-gray">
    <div class="row">
        <div class="col-sm-3" id="menu">
            <h1>Historique</h1>
            <div class="divider"></div>
            <a class="paramMenu text-secondary" onclick="disabledHistory()" id="toggleHistory"></a>
        </div> 
        <div class="col-sm-7">
            <div id="history">
                <br><br>
                <h2 class="text-center">Historique</h2>
                <div class="smallDivider"></div>
                <br>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-10">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-5"><p>Titre</p></div>
                                <div class="col-4"><small class="text-danger"><a onclick="askForSupression('all')">Tout supprimer</a><br><a id="supprSelection" onclick="askForSupression('selected')">Supprimer la selection</a></small></div>
                                <div class="col-3"><p>Selectionner</p></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="historyContainer"></div>
            </div>
        </div>
    </div>
</div>

<?php include "../modules/endBlock.php" ?>