let progressDefault = " 2 ";
let contenuPanier = getCookieVal("panier").split("  ");
let quantity = document.getElementsByClassName("quantity");
let select = document.getElementsByClassName("select");
let options = [];

let failled = false;
let error = document.createElement("div");
error.classList.add("erreur");
error.innerHTML = "Le champ 'Site' est obligatoire !";

function getSelectValue(index) {
	for (let i = 1; i < 4; i++) {
		options[i] = document.querySelectorAll("option")[i].value;
	}
	if (options[select[index].selectedIndex] == undefined) return "";
	return options[select[index].selectedIndex];
}

function validerPanier() {
	if (document.getElementsByClassName("articlePanier").length < 1) {
		let err = document.createElement("div");
		err.classList.add("erreur");
		err.innerHTML = "Aucun article dans votre panier !";
        document.body.appendChild(err);
	} else {
		document.cookie = "city=;";
		document.cookie = "progress=;";
		document.cookie = "quantity=;";
		document.cookie = "buyDates=;";
		console.log(contenuPanier.length);
		failled = false;
		for (let i = 0; i < contenuPanier.length; i++) {
			document.cookie =
				"progress=" + getCookieVal("progress") + " " + progressDefault;
			document.cookie =
				"quantity=" +
				getCookieVal("quantity") +
				"  " +
				quantity[i].value +
				"  ";
			document.cookie =
				"city=" + getCookieVal("city") + "  " + getSelectValue(i) + "  ";
			let date = new Date();
			document.cookie =
				"buyDates=" + getCookieVal("buyDates") + "  " + date.toLocaleString();
			if (getSelectValue(i) == undefined || getSelectValue(i) == "") {
				document.body.appendChild(error);
				select[i].style.border = "2px solid red";
				failled = true;
			}
		}
		if (!failled) location.href = "suivi-achat";
	}
}
