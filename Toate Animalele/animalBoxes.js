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

    return parent;
}


function createAnimals() {
    $(window).ready(function(e) {
        $.ajax({
            url: "../phpFiles/getDataForAnimalBoxes.php",//numele fisierului php care imi trimite jsonul
            type: "POST",
            dataType: "json",
            success: function(list) {
                var div = "<div><p>aoleu</p></div>";
                // list.forEach(function(obj,index) {
                    $("#animale-casute").append(div); 
                // });
                // $("#animale-casute").append(createNewAnimalBox());
            }
        });
    });
}


