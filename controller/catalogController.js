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
    xml.open("GET", "../../model/optiuniCautare.php?q="+el,true);
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
        xml.open("GET", "../../model/animaleDeCautat.php?q="+searchInput.value,true);
        xml.send();
        searchInput.value = "";
        document.getElementById("optiuni-cautare").style.display = "none";
    }
}


// INCARCARE INITIALA A ANIMALELOR
function incarcareAnimale() {
    var animals = document.getElementById("animale-casute");
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            animals.innerHTML = this.responseText;
        }
    };
    xml.open("GET", "../../model/initializareAnimale.php?q=1", true);
    xml.send();
}

window.onload = incarcareAnimale;
