function toggleDM(){
    switch(getCookieVal('darkMode')){
        case 'on':
            document.cookie = "darkMode=off";
            lightMode()
            document.getElementById('dmToggle').innerHTML = "off";
            break;
        case 'off':
            document.cookie = "darkMode=on";
            darkMode()
            document.getElementById('dmToggle').innerHTML = "on";
            break;
        default: 
            document.cookie = "darkMode=on";
    }
}

function loadDarkMode(){
    switch(getCookieVal('darkMode')){
        case 'on':
            darkMode();
            break;
        case 'off':
            lightMode();
            break;
        default: 
            lightMode();
    }
}

loadDarkMode();

function lightMode(){
    for(let i = 0; i < document.getElementsByClassName('livre').length; i++) document.getElementsByClassName('livre')[i].style.transition = "0s !important";
    document.querySelector(':root').style.setProperty('--textColor', "#262626");
    document.querySelector(':root').style.setProperty('--white', "white");
    document.querySelector(':root').style.setProperty('--bggray', "#DADADA");
    document.querySelector(':root').style.setProperty('--boxShadow', "0px 0px 15px grey");
    for(let i = 0; i < document.getElementsByClassName('livre').length; i++) document.getElementsByClassName('livre')[i].style.transition = "0.4s !important";
}

function darkMode(){
    for(let i = 0; i < document.getElementsByClassName('livre').length; i++) document.getElementsByClassName('livre')[i].style.transition = "0s !important";
    document.querySelector(':root').style.setProperty('--textColor', "white");
    document.querySelector(':root').style.setProperty('--white', "#424242");
    document.querySelector(':root').style.setProperty('--bggray', "#606060");
    document.querySelector(':root').style.setProperty('--boxShadow', "0px 0px 15px #121212");
    for(let i = 0; i < document.getElementsByClassName('livre').length; i++) document.getElementsByClassName('livre')[i].style.transition = "0.4s !important";
}