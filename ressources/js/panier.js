let title = [], cover = [], desc = [];
let div = document.createElement("div");
div.classList.add("popover");
div.classList.add("box");

let historySelect = document.getElementsByClassName('historySelect');

for(let i = 0; i < books.length; i++){
    title[i] = document.getElementsByClassName("titreLivre")[i].textContent;
    desc[i] = document.querySelectorAll("small")[i].textContent;
    cover[i] = document.getElementsByClassName("imgLivre")[i].src;
    books[i].addEventListener("click", () => {
        div.innerHTML = 
            `<div class="container-fluid">
                <div class="row">
                    <div class="col-7">
                        <h2>` + title[i] + `</h2>
                        <p>` + desc[i].slice(0, 1000) + `</p>
                    </div>
                    <div class="col-5 border-left">
                        <h4>Ajouter ce livre au panier ?</h4><br>
                        <div class="smallDivider"></div><br>
                        <img src="` + cover[i] + `"class="img-responsive" style="width: 50%; margin-bottom: 15px;">
                        <h5> - ` + title[i] +` </h5>
                        <br><h5><a href="" class="button" onclick="addBook(` + i + `)">Ajouter</a></h5>
                        <br><a href="" class="text-secondary">Annuler</a>
                    </div>
                </row>
            <div>`;
        document.querySelector('body').appendChild(div);
        let historic = getCookieVal("historic") || "";
        if(getCookieVal('historic') != "disabled") document.cookie = String("historic=" + historic + "  " + title[i]);                     //on rajoute le titre à l'historique
        let dates = getCookieVal("dates") || "";
        let now = new Date();
        document.cookie = String("dates=" + dates + "  " + String(now.toLocaleString()));
    })
}

function addBook(i){
    let panier = getCookieVal("panier") || "";
    document.cookie = String("panier=" + panier + "  " + title[i]);
}

let panier = document.getElementById("panier");

function getPanier(){
    if(window.location.href.includes("panier")){
        if(getCookieVal('panier')){
            let articles = getCookieVal("panier").split('  ');
            for(let i = 0; i < articles.length; i++){
                let article = document.createElement("div");
                article.innerHTML = 
                `<div class="row articlePanier border">
                    <div class="col-4 text-left">` + articles[i] + `</div>
                    <div class="col-2 text-right">
                        <small>
                            <a class="text-danger" onclick="deleteArticle(` + '`' + String(articles[i]) + '`' + `)">Supprimer</a>
                        </small>
                    </div>
                    <div class="col-3">
                        <select>
                            <option>Bibliothèque :</option>
                            <option>Bibliothèque Paris Nord</option>
                            <option>Bibliothèque Orléans</option>
                            <option>Bibliothèque Orsay</option>
                        </select>
                    </div>
                    <div class="col-1 text-right px-0">
                        <label for"quantity" class="text-secondary">Quantité :</label>
                    </div>
                    <div class="col-1 text-left px-2">
                        <input name="quantity" type="number" min="1" max="9" value="1"></div>
                    <div class="col-1 text-left">8.99€</div>
                </div>`
                document.getElementById("itemPanier").appendChild(article);
            }
        }else{
            let p = document.createElement('p');
            p.innerHTML = "Il n'y à aucun livre dans votre panier"
            document.getElementById("itemPanier").appendChild(p);
        }
    }
}

getPanier();


let dates = getCookieVal('dates').split('  ');

if(window.location.href.includes("historique")){
    if(getCookieVal('historic') != "" && getCookieVal('historic') != "disabled"){
        let livres = getCookieVal("historic").split('  ');
        dates = getCookieVal('dates').split('  ');
        for(let i = 0; i < livres.length; i++){
            let livre = document.createElement("div");
            let index = title.indexOf(livres[i]);
            livre.innerHTML = 
            `<hr>
            <div class="row">
                <div class="col-2">
                    <small>` + dates[i] + `</small>
                    <img src="` + cover[index] + `" style="width: 100%; margin-top: 10px" alt="Photo de couverture">
                </div>
                <div class="col-10">
                    <div class="container-fluid">
                    <div class="row">
                    <div class="col-9"><p class="historyTitle">` + title[index] + `</p></div>
                    <div class="col-3"><input type="checkbox" class="historySelect" style="margin: auto"></div>
                </div>
                <p>` + desc[index].slice(0, 320) + `</p>
                    </div>
                </div>
            </div>`;
            document.getElementById("historyContainer").parentNode.insertBefore(livre, document.getElementById("historyContainer").nextSibling);        //retourne le sens de l'historique
        }
    }else if(getCookieVal('historic') != "disabled"){
        let p = document.createElement('p');
        p.classList.add("text-center");
        p.innerHTML = "<br>Votre historique de recherche est vide."
        document.getElementById("historyContainer").appendChild(p);
    }else{
        let p = document.createElement('p');
        p.classList.add("text-center");
        p.innerHTML = "<br>L'historique des recherche est désactivé."
        document.getElementById("historyContainer").appendChild(p);
    }

    
    if(getCookieVal('historic') === 'disabled'){
        document.getElementById("toggleHistory").textContent = "Réactiver l'historique";
    }else{
        document.getElementById("toggleHistory").textContent = "Désactiver l'historique";
    }
}

function clearFullHistory(){
    if(getCookieVal("historic")){
        if(getCookieVal('historic') != "disabled") document.cookie = "historic=";
        document.cookie = "dates=;";
    }
    location.reload();
}

let cookie;
let deletedBooksFromHistory = false;

function clearSelectedHistory(){
    historySelect = document.getElementsByClassName('historySelect');
    for(let i = 0; i < historySelect.length; i++){
        let index = title.indexOf(document.getElementsByClassName("historyTitle")[i].textContent);
        if(historySelect[i].checked){
            cookie = getCookieVal('historic').replace(title[index], '');
            date = getCookieVal('dates').split('  ')[cookie.indexOf(title[index])];
            document.cookie = "dates=" + getCookieVal('dates').replace(date, '') + ";";
            document.cookie = "historic=" + cookie + ";";
            deletedBooksFromHistory = true;
        }
        if(deletedBooksFromHistory) location.reload();
    }
    deletedBooksFromHistory = false;
}

function areBoxChecked(){
    for(i = 0; i < historySelect.length; i++){
        if(historySelect[i].checked) return true;
    }
}

function askForSupression(fun){
    let f;
    if(fun === 'all') f = "clearFullHistory";
    else if(fun === 'selected') f = "clearSelectedHistory";
    else if(fun === 'deleteArticle') f = "deleteArticle";
    historySelect = document.getElementsByClassName('historySelect');
    
    if(fun === "selected"){
        if(areBoxChecked() == true){
            div.innerHTML = 
                `<div class="container-fluid">
                    <div class="row">
                        <div class="col-8">
                            <br>
                            <h4 class="text-danger">Supprimer la sélection ?</h4>
                            <small class="text-danger">Cette action est définitive</small>
                        </div>
                        <div class="col-4 border-left">
                            <h4><a href="" onclick="`
                            + f + "()" + 
                            `">Supprimmer</a><br><br><a href="">Annuler</a></h4>
                        </div>
                    </row>
                <div>`;
        }else{
            div.innerHTML = 
        `<div class="container-fluid">
            <div class="row">
                <div class="col-10">
                    <h4 class="text-danger">Aucun élément n'as été selectionné</h4>
                </div>
                <div class="col-2 border-left">
                    <h4><a href="">OK</h4></p>
                </div>
            </row>
        <div>`;
        }
    }else if(f){
    div.innerHTML = 
        `<div class="container-fluid">
            <div class="row">
                <div class="col-8">
                    <br>
                    <h4 class="text-danger">Tout supprimer ?</h4>
                    <small class="text-danger">Cette action est définitive</small>
                </div>
                <div class="col-4 border-left">
                    <h4><a href="" onclick="`
                    + f + "()" + 
                    `">Supprimmer</a><br><br><a href="">Annuler</a></h4>
                </div>
            </row>
        <div>`;
    }else alert('Erreur');
    
    document.querySelector('body').appendChild(div);
}

function deleteArticle(item){
    let panier = getCookieVal("panier");
    newPanier = panier.replace(item, '');
    document.cookie = String("panier=" + newPanier); 
    location.reload();
}

function disabledHistory(){
    if(getCookieVal('historic') === "disabled"){
        div.innerHTML = 
            `<div class="container-fluid">
                <div class="row">
                    <div class="col-8 border-right">
                        <p>L'historique est désactivé, souhaitez vous le réactiver ?</p>
                    </div>
                    <div class="col-4">
                        <a href="" class="text-secondary" onclick="document.cookie='historic='">réactiver l'historique</a> 
                        <br><br>
                        <a href="" class="text-secondary">Annuler</a>
                    </div>
                </row>
            <div>`;
    }else{
        div.innerHTML = 
            `<div class="container-fluid">
                <div class="row">
                    <div class="col-8 border-right">
                        <p>L'historique est activé, souhaitez vous le Désactiver ?</p>
                        <small class="text-danger">Cela aura pour action de supprimer votre historique</small>
                    </div>
                    <div class="col-4">
                        <a href="" class="text-secondary" onclick="document.cookie='historic=disabled'">Désactiver l'historique</a> 
                        <br><br>
                        <a href="" class="text-secondary">Annuler</a>
                    </div>
                </row>
            <div>`;
    }
    document.querySelector('body').appendChild(div);
}