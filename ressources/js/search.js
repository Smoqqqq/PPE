let searchButton = document.getElementById("searchButton");
let searchBar = document.getElementById("search");
let query = searchBar.value;
let print = [];

function updateList(){
    for(let i = 0; i < books.length; i++){
        if(print[i]) books[i].classList.remove('hidden');
        else books[i].classList.add('hidden');
    }
}

function selectBooksToPrint(){
    query = searchBar.value;
    if(searchBar.value != ""){
        for(let i = 0; i < books.length; i++){
            if(books[i].innerText.includes(query) || books[i].innerText.includes(query.toUpperCase())) print[i] = true;
            else print[i] = false;
        }
    }else{
        for(let i = 0; i < books.length; i++) print[i] = true;
    }
}

function checkForEmptyArea(){
    let titles = document.querySelectorAll("h2");
    let dividers = document.getElementsByClassName("divider");
    if(query != ""){
        for(let i = 0; i < titles.length; i++){
            titles[i].style.display = "none";
        }
        for(let i = 0; i < dividers.length; i++){
            if(window.location.href.includes('biblio')) dividers[i].style.display = "none";
        }
    }else{
        for(let i = 0; i < titles.length; i++){
            titles[i].style.display = "block";
        }
        for(let i = 0; i < dividers.length; i++){
            dividers[i].style.display = "block";
        }
    }    
}

searchButton.addEventListener('click', () => {
    selectBooksToPrint();
    updateList();
    checkForEmptyArea();
})

searchBar.addEventListener('keydown', (e) => {
    if(e.code === "Enter"){
        selectBooksToPrint();
        updateList();
        checkForEmptyArea();
    }
})