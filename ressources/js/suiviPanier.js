let progressDefault = ' 3 Jours ';
let contenuPanier = getCookieVal('panier').split('  ');
let quantity = document.getElementsByClassName('quantity');

function validerPanier(){
    document.cookie = 'progress=;';
    document.cookie = 'quantity=;';
    for(let i = 0; i < contenuPanier.length; i++){
        document.cookie = 'progress=' + getCookieVal('progress') + ' ' +  progressDefault;
        document.cookie = 'quantity=' + getCookieVal('quantity') + '  ' + quantity[i].value + '  ';
    }
}