let progressDefault = ' 3 Jours ';
let contenuPanier = getCookieVal('panier').split('  ');

function validerPanier(){
    document.cookie = 'progress=;';
    for(let i = 0; i < contenuPanier.length; i++){
        document.cookie = 'progress=' + getCookieVal('progress') + ' ' +  progressDefault;
    }
}