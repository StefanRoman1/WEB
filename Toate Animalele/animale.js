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


// GESTIONARE BUTON DE TOP
function topFunction() {
    document.body.scrollTop = 0; 
    document.documentElement.scrollTop = 0;
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



function createNewAnimalBox() {
    var parent = document.getElementById("animale-casute");
    var mainBox = document.createElement("div");
    mainBox.classList.add("casuta-animal");
    
    var imageOuterDiv = document.createElement("div");
    imageOuterDiv.classList.add("casuta-imagine");
    var imageInnerDiv = document.createElement("div");
    imageInnerDiv.classList.add("imagine");
    imageInnerDiv.style.backgroundImage = "url(../../images/syed-ahmad-yXTr6XeJDV8-unsplash.jpg)";
    imageOuterDiv.appendChild(imageInnerDiv);

    mainBox.appendChild(imageOuterDiv);

    var detailsDiv = document.createElement("div");
    detailsDiv.classList.add("detalii-animal-casuta");

    var animalName = document.createElement("h3");
    animalName.classList.add("nume-animal");
    var animalNameText = document.createTextNode("Test Test");
    animalName.appendChild(animalNameText);
    detailsDiv.appendChild(animalName);

    var animalLatinName = document.createElement("h3");
    animalLatinName.classList.add("nume-animal-latina");
    var animalLatinNameItalic = document.createElement("i");
    var animalLatinNameItalicText = document.createTextNode("Test Test Latina");
    animalLatinNameItalic.appendChild(animalLatinNameItalicText);
    animalLatinName.appendChild(animalLatinNameItalic);
    detailsDiv.appendChild(animalLatinName);

    var animalDescription = document.createElement("div");
    animalDescription.classList.add("descriere-animal");

    var animalDescriptionTitle = document.createElement("h3");
    animalDescriptionTitle.classList.add("descriere-animal-titlu");
    var animalDescriptionTitleText = document.createTextNode("Descriere");
    animalDescriptionTitle.appendChild(animalDescriptionTitleText);
    animalDescription.appendChild(animalDescriptionTitle);

    var animalDescriptionContent = document.createElement("p");
    animalDescriptionContent.classList.add("descriere-animal-continut");
    var animalDescriptionContentText = document.createTextNode("Descriere de test a unui animal si sper sa mearga acum!");
    animalDescriptionContent.appendChild(animalDescriptionContentText);
    animalDescription.appendChild(animalDescriptionContent);

    detailsDiv.appendChild(animalDescription);

    mainBox.appendChild(detailsDiv);

    parent.appendChild(mainBox);
}