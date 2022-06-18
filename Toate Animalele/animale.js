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


// SCHIMBAREA GRIDULUI DE AFISARE
function gridFormatEvent(el) {
    if(el.id !== lastGrid) {
        document.getElementById("animale-casute").classList.toggle("show-grid");
    }
}


// AFISARE OPTIUNI BUTON CAUTARE
function showResults(el) {
    var opt = document.getElementById("optiuni-cautare");
    if(el.length == 0) {
        opt.innerHTML = "";
        return;
    }
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            opt.innerHTML = this.responseText;
            opt.style.display = "block";
        }
    };
    xml.open("GET", "optiuniCautare.php?q="+el,true);
    xml.send();
}

function trimitereSpreCautare(textDeCautat) {
    if(textDeCautat.innerHTML != "Nicio sugestie!") {
        var searchInput = document.getElementsByName('searchInput')[0];
        // searchInput.placeholder = textDeCautat.innerHTML;
        searchInput.value = textDeCautat.innerHTML;
        document.getElementById("optiuni-cautare").style.display = "none";
    }
}


// AFISARE DOAR ANIMALE CARE SUNT CAUTATE
function cautareAnimale() {
    var searchInput = document.getElementsByName('searchInput')[0];
    console.log(searchInput.value);
    if(searchInput.value.length) {
        var animals = document.getElementById("animale-casute");
        animals.innerHTML = "";
        var xml = new XMLHttpRequest();
        xml.onreadystatechange = function() {
            if(this.readyState == 4 && this.status == 200) {
                animals.innerHTML = this.responseText;
            }
        };
        xml.open("GET", "animaleDeCautat.php?q="+searchInput.value,true);
        xml.send();
        searchInput.value = "";
    }
}

// let anmName;
// let latinName;
// let description;

// function getAnimalProprieties(animalName,propriety) {
//     var request = new XMLHttpRequest();
//     request.onreadystatechange = function () {
//         if(this.readyState == 4 && this.status == 200) {
//             switch(propriety) {
//                 case "name":
//                     anmName = this.responseText;
//                     break;
//                 case "latinName":
//                     latinName = this.responseText;
//                     break;
//                 case "description":
//                     description = this.responseText;
//                     break;
//             }
//         }
//     };
//     request.open("GET", "getanimal.php?name"+animalName)

// }

