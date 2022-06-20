<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="Style/style.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <title>Adaugare animal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class = "background">
        <form action="adaugare.php" method="post" class="form-placement box font" enctype="multipart/form-data">
                <h1>Adauga animal</h1>
                <div>
                    <label for="denpop" class="font">Denumire populara:</label><br>
                    <input type="text" id="denpop" name="denpop" class="text-input font" required><br>
                </div>

                <div>
                    <label for="mainimg" class="font">Incarca imagine reprezentativa:</label>
                    <input type="file" id="mainimg" name="mainimg" class="font" required>
                </div>

                <div>
                    <label for="densnf" class="font">Denumire stiintifica:</label><br>
                    <input type="text" id="densnf" name="densnf" class="text-input font" required><br>
                </div>

                <div>
                    <label for="message" class="font">Descriere:</label><br>
                    <textarea id="message" name="message" rows="10" cols="30" class="textarea font" required></textarea>
                </div>
                
                <div>
                    <label for="statut" class="font">Statut</label>
                    <select id="statut" name="statut" class="text-input font" required>
                        <option value="normal">Normal</option>
                        <option value="protejat">Protejat</option>
                        <option value="popilatie-redusa">Populatie redusa</option>
                        <option value="cale-de-disparitie">Pe cale de disparitie</option>
                    </select>
                </div>

                <div>
                    <label for="clasa" class="font">Clasa biologica</label>
                    <select id="clasa" name="clasa" class="text-input font" required>
                        <option value="mamifer">Mamifer</option>
                        <option value="amfibian">Amfibian</option>
                        <option value="reptila">Reptila</option>
                        <option value="peste">Peste</option>
                        <option value="pasare">Pasare</option>
                        <option value="artropod">Artropod</option>
                        <option value="alta-clasa">Altele</option>
                    </select>
                </div>

                <div>
                    <label for="habitat" class="font">Habitat</label>
                    <select id="habitat" name="habitat" class="text-input font" required>
                        <option value="alpin">Alpin</option>
                        <option value="paduri">Paduri</option>
                        <option value="campie">Campie</option>
                        <option value="desert">Desert</option>
                        <option value="jungla">Jungla</option>
                        <option value="savana">Savana</option>
                        <option value="tundra">Tundra</option>
                        <option value="arctic">Arctic</option>
                        <option value="maritim">Maritim</option>
                        <option value="apa-dulce">Apa dulce</option>
                        <option value="mlastina">Mlastina</option>
                    </select>
                </div>

                <div>
                    <label for="continent" class="font">Continent</label>
                    <select id="continent" name="continent" class="text-input font" required>
                        <option value="europa">Europa</option>
                        <option value="asia">Asia</option>
                        <option value="america-nord">America de nord</option>
                        <option value="america-sud">America de sud</option>
                        <option value="africa">Africa</option>
                        <option value="australia">Australia</option>
                        <option value="antarctica">Antarctica</option>
                        <option value="ocean">Ocean</option>
                    </select>
                </div>

                <div>
                    <label for="raspandire" class="font">Raspandire:</label><br>
                    <textarea id="raspandire" name="raspandire" rows="10" cols="30" class="textarea font" required></textarea>
                </div>

                <div>
                    <label for="habitatimg" class="font">Incarca imagine cu habitat:</label>
                    <input type="file" id="habitatimg" name="habitatimg" class="font" required>
                </div>

                <div>
                    <label for="trasaturi" class="font">Trasaturi distinctive:</label><br>
                    <textarea id="trasaturi" name="trasaturi" rows="10" cols="30" class="textarea font" required></textarea>
                </div>

                <div>
                    <label for="trasaturiimg" class="font">Incarca poza cu trasaturi:</label>
                    <input type="file" id="trasaturiimg" name="trasaturiimg" class="font" required>
                </div>

                <div>
                    <label for="hrana" class="font">Hrana</label>
                    <select id="hrana" name="hrana" class="text-input font" required>
                        <option value="carnivor">Carnivor</option>
                        <option value="omnivor">Omnivor</option>
                        <option value="erbivor">Erbivor</option>
                        <option value="alta-hrana">Altele</option>
                    </select>
                </div>

                <div>
                    <label for="hranaimg" class="font">Incarca imagine cu hrana:</label>
                    <input type="file" id="hranaimg" name="hranaimg" class="font" required>
                </div>

                <div>
                    <label for="descriere-hrana" class="font">Despre hrana:</label><br>
                    <textarea id="descriere-hrana" name="descriere-hrana" rows="10" cols="30" class="textarea font" required></textarea>
                </div>

                <div>
                    <label for="socialimg" class="font">Incarca imagine cu viata sociala:</label>
                    <input type="file" id="socialimg" name="socialimg" class="font" required>
                </div>

                <div>
                    <label for="viata-sociala" class="font">Viata sociala</label>
                    <select id="viata-sociala" name="viata-sociala" class="text-input" required>
                        <option value="solitar">Solitar</option>
                        <option value="familie">Familie restransa</option>
                        <option value="grupuri">Grupuri extinse</option>
                        <option value="alta-forma-de-socializare">Altele</option>
                    </select>
                </div>

                <div>
                    <label for="descriere-viata-sociala" class="font">Despre viata sociala:</label><br>
                    <textarea id="descriere-viata-sociala" name="descriere-viata-sociala" rows="10" cols="30" class="textarea" required></textarea>
                </div>

                <div>
                    <label for="reproducereimg" class="font">Incarca imagine cu reproducere:</label>
                    <input type="file" id="reproducereimg" name="reproducereimg" class="font" required>
                </div>
                <div>
                    <label for="reproducere" class="font">Reproducere:</label><br>
                    <textarea id="reproducere" name="reproducere" rows="10" cols="30" class="textarea" required></textarea>
                </div>

                <div>
                    <label for="altele" class="font">Altele:</label><br>
                    <textarea id="altele" name="altele" rows="10" cols="30" class="textarea" required></textarea>
                </div>

                <div>
                    <label for="uploadedfile" class="font">Incarca fisier XML:</label>
                    <input type="file" id="uploadedfile" name="uploadedfile" class="font">
                </div>

                <div class="bottom-padding font">
                    <input type="submit" name="submit" value="Incarca" class="submit-button text-input">
                </div>
        </form>
    </body>
</html>