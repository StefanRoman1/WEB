function functieButonSortareAnimale() {
    document.getElementById("optiuni-sortare-buton").classList.toggle("show");
}

function restrangereOptiuniSortare() {
    document.getElementById("optiuni-sortare-buton").classList.toggle("show");
}

function filtruClickEvent(el) {
    el.parentElement.classList.toggle("show");
}


let lastGrid = "grid-patrate";

function changeIfDifferent(el, id) {
    if (el.id === id && lastGrid !== id) {
        const gridLinieElement = document.getElementById("grid-linie");
        const gridPatrateElement = document.getElementById("grid-patrate");

        lastGrid = id;
        gridLinieElement.classList.toggle("show");
        gridPatrateElement.classList.toggle("show");
        gridChangedEvent();
    }
}

function gridClickEvent(el) {
    changeIfDifferent(el, "grid-linie");
    changeIfDifferent(el, "grid-patrate");
}

function gridChangedEvent() {
    let gridCurent = lastGrid; // poate fi "grid-linie" sau "grid-patrate", in functie de ce s-a selectat
}

// FUNCTII DE SORTARE A ANIMALELOR DIN PAGINA
function sortAnimalsAZ() {
    var list, i, switching, shouldSwitch, b;
    var detaliiAnimal1, numeAnimal1;
    var detaliiAnimal2, numeAnimal2;
    list = document.getElementById("animale-casute");
    switching = true;
    while(switching) {
        switching = false;
        b = list.getElementsByClassName("casuta-animal");
        for(i = 0; i < (b.length - 1); i++) {
            shouldSwitch = false;
            detaliiAnimal1 = b[i].getElementsByClassName("detalii-animal-casuta");
            numeAnimal1 = detaliiAnimal1[0].getElementsByClassName("nume-animal");
            detaliiAnimal2 = b[i+1].getElementsByClassName("detalii-animal-casuta");
            numeAnimal2 = detaliiAnimal2[0].getElementsByClassName("nume-animal");
            if(numeAnimal1[0].innerHTML.toLocaleLowerCase() > numeAnimal2[0].innerHTML.toLocaleLowerCase()){
                shouldSwitch = true;
                break;
            }
        }
        if (shouldSwitch) {
            b[i].parentNode.insertBefore(b[i+1],b[i]);
            switching = true;
        }
    }
}

function sortAnimalsZA() {
    var list, i, switching, shouldSwitch, b;
    var detaliiAnimal1, numeAnimal1;
    var detaliiAnimal2, numeAnimal2;
    list = document.getElementById("animale-casute");
    switching = true;
    while(switching) {
        switching = false;
        b = list.getElementsByClassName("casuta-animal");
        for(i = 0; i < (b.length - 1); i++) {
            shouldSwitch = false;
            detaliiAnimal1 = b[i].getElementsByClassName("detalii-animal-casuta");
            numeAnimal1 = detaliiAnimal1[0].getElementsByClassName("nume-animal");
            detaliiAnimal2 = b[i+1].getElementsByClassName("detalii-animal-casuta");
            numeAnimal2 = detaliiAnimal2[0].getElementsByClassName("nume-animal");
            if(numeAnimal1[0].innerHTML.toLocaleLowerCase() < numeAnimal2[0].innerHTML.toLocaleLowerCase()){
                shouldSwitch = true;
                break;
            }
        }
        if (shouldSwitch) {
            b[i].parentNode.insertBefore(b[i+1],b[i]);
            switching = true;
        }
    }
}



function gridFormatEvent(el) {
    if(el.id !== lastGrid) {
        document.getElementById("animale-casute").classList.toggle("show-grid");
        // lastGrid = el.id;
    }
}