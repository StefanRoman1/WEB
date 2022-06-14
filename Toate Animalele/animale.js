function functieButonSortareAnimale() {
    document.getElementById("optiuni-sortare-buton").classList.toggle("show");
}

function restrangereOptiuniSortare() {
    document.getElementById("optiuni-sortare-buton").classList.toggle("show");
}

function filtruClickEvent(el) {
    el.parentElement.classList.toggle("show");
}


function placeAnimalName(el) {
    
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