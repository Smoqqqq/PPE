let url, loggedIn, name;

function showPersonalInfo(){
    document.getElementById("connected").style.display = "block";
    document.getElementById("nom").innerHTML = "Connecté en tant que : " + getCookieVal("name");
}

function hidePersonnalInfo(){
    document.getElementById("connected").style.display = "none";
}

function disconnect(){
    document.cookie = "loggedIn=false";
    document.cookie = "name=";
    document.cookie = "panier=";
}

function testUrl(url){
    if(url.includes("?loggedin")){
        document.cookie = "loggedIn=true";
        loggedIn = true;
        window.location.href = "index";
    }else if(document.cookie.includes("loggedIn=true")){
        loggedIn = true;
    }else{
        loggedIn = false;
    }
}

window.addEventListener("DOMContentLoaded", () => {
    url = window.location.href;
    testUrl(url);
    if(loggedIn) showPersonalInfo();
    else hidePersonnalInfo();
})