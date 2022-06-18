function incarcareAnimale() {
    var animals = document.getElementById("animale-casute");
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            animals.innerHTML = this.responseText;
        }
    };
    xml.open("GET", "initializareAnimale.php?q=1", true);
    xml.send();
}

window.onload = incarcareAnimale;