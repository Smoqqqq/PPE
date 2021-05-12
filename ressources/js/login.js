let url, loggedIn, name;

function showPersonalInfo() {
	document.getElementById("connected").style.display = "block";
	document.getElementById("nom").innerHTML = "Connecté en tant que : <a onclick='personnalPage()' title='Informations personnelles'>" + getCookieVal("name") + "</a>";
}

function hideInfos() {
	document.getElementById("infoPopup").remove();
}

function showPassword() {
	document.getElementById("mdp").innerHTML = getCookieVal("mdp");
}

function hidePassword() {
	document.getElementById("mdp").innerHTML = "••••••";
}

function personnalPage() {
	let historyState = getCookieVal("historic") == "disabled" ? "désactivé" : "activé";
	let div = document.createElement("div");
	div.classList.add("popover");
	div.classList.add("box");
	div.id = "infoPopup";
    let dmValue = getCookieVal("darkmode") || 'off';
	div.innerHTML =
		`
        <div class="text-left row">
        <h2 class="text-center" style="width: 100%; margin-bottom: 15px">Informations personnelles</h2>
        <br>
            <div class="col-sm-6">
                <p>Nom d'utilisateur : <e style="color: var(--orange)">` + getCookieVal("name") + `</e></p>
                <p>Mot de passe : <e id="mdp" title="cliquez pour révéler">••••••</e></p>
                <a href="" onclick="disconnect()">Déconnexion</a>
            </div>
            <div class="col-sm-6">      
                <p>Mode Sombre : <a id="dmToggle">` + dmValue + `</a></p>
                <p><a href="historique"><i class="fas fa-external-link-alt"></i> Historique : </a><e id="histo"> ` + historyState +	` </e></p>
                <p><a href="panier"><i class="fas fa-external-link-alt"></i> Mon panier </a></p>
            </div>
        </div>
        <a onclick="hideInfos()" class="closeInfos"><i class="far fa-times-circle"></i></a>
    `;
	document.querySelector("body").appendChild(div);

	document.getElementById("mdp").addEventListener("click", () => {
		showPassword();
	});
	document.getElementById("mdp").addEventListener("mouseout", () => {
		hidePassword();
	});
	document.getElementById("dmToggle").addEventListener("click", () => {
		toggleDM();
	});
}

function hidePersonnalInfo() {
	document.getElementById("connected").style.display = "none";
}

function disconnect() {
	document.cookie = "loggedIn=false";
	document.cookie = "name=";
	document.cookie = "panier=";
}

function testUrl(url) {
	if (url.includes("?loggedin")) {
		document.cookie = "loggedIn=true";
		loggedIn = true;
		window.location.href = "index";
	} else if (document.cookie.includes("loggedIn=true")) {
		loggedIn = true;
	} else {
		loggedIn = false;
	}
}

window.addEventListener("DOMContentLoaded", () => {
	url = window.location.href;
	testUrl(url);
	if (loggedIn) showPersonalInfo();
	else hidePersonnalInfo();
});
