let progressDefault = ' 1 ';
let contenuPanier = getCookieVal('panier').split('  ');
let quantity = document.getElementsByClassName('quantity');
let select = document.getElementsByClassName('select');
let options = [];

function getSelectValue(index){
    for(let i = 1; i < 4; i++){
        options[i] = document.querySelectorAll('option')[i].value;
    }
    return options[select[index].selectedIndex + 1];
}

function validerPanier(){
    document.cookie = "city=;";
    document.cookie = 'progress=;';
    document.cookie = 'quantity=;';
    for(let i = 0; i < contenuPanier.length; i++){
        document.cookie = 'progress=' + getCookieVal('progress') + ' ' +  progressDefault;
        document.cookie = 'quantity=' + getCookieVal('quantity') + '  ' + quantity[i].value + '  ';
        document.cookie = 'city=' + getCookieVal('city') + '  ' + getSelectValue(i) + '  ';
    }
    location.href="suivi-achat";
}