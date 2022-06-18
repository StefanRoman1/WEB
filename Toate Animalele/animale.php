<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Resources/animale.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="animale.js"></script>
        <script src="animalBoxes.js"></script>
        <title>Catalog Animale</title>
    </head>

    <body>
        <button onclick="topFunction()" id="to-top-button" title="Mergi la început">
            <i class="fa fa-arrow-up" aria-hidden="true"></i>
        </button>

        <nav class="menu">
            <input type="checkbox" id="check">
            <label for="check" class="toggle"><i class="fas fa-bars"></i></label>
            <img class="logo" src="tigru.jpg">
            <ul>
                <li class = "item"><a href="#animale">Catalog</a></li>
                <li class = "item"><a href="#program">Program</a></li>
                <li class = "item"><a href="#harta">Hartă</a></li>
                <li class = "item"><a href="#rezervari">Rezervă un loc</a></li>
                <li class = "item"><a href="#echipa">Staff</a></li>
            </ul>
        </nav>

        <main id="pagina-animale">
            
            <section id="bara-filtre">
                <h1>Animalele <br> din grădină</h1>
    
                <section class="toate-filtrele">
    
                    <div class="filtru" id="filtru-origine">
                        <div class="nume-filtru" onclick="filtruClickEvent(this)">
                            <p>Origine</p>
                            <img src="../images/chevron-up.png" alt="up-arrow-filter-box">
                        </div>
    
                        <ul>
                            <!-- intr-un submit acel checkbox va avea opname=opval daca e setat, sau absolut nimic, daca nu -->
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                        </ul>
    
                    </div>
    
                    <div class="filtru" id="filtru-mediu-de-viata">
                        <div class="nume-filtru" onclick="filtruClickEvent(this)">
                            <p>Mediu de viață</p>
                            <img src="../images/chevron-up.png" alt="up-arrow-filter-box">
                        </div>
    
                        <ul>
                            <!-- intr-un submit acel checkbox va avea opname=opval daca e setat, sau absolut nimic, daca nu -->
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                        </ul>
                    </div>

                    <div class="filtru" id="filtru-hrana">
                        <div class="nume-filtru" onclick="filtruClickEvent(this)">
                            <p>Hrană</p>
                            <img src="../images/chevron-up.png" alt="up-arrow-filter-box">
                        </div>
    
                        <ul>
                            <!-- intr-un submit acel checkbox va avea opname=opval daca e setat, sau absolut nimic, daca nu -->
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                        </ul>
                    </div>

                    <div class="filtru" id="filtru-tip-de-specie">
                        <div class="nume-filtru" onclick="filtruClickEvent(this)">
                            <p>Tip de specie</p>
                            <img src="../images/chevron-up.png" alt="up-arrow-filter-box">
                        </div>
    
                        <ul>
                            <!-- intr-un submit acel checkbox va avea opname=opval daca e setat, sau absolut nimic, daca nu -->
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                        </ul>
                    </div>

                    <div class="filtru" id="filtru-domesticire">
                        <div class="nume-filtru" onclick="filtruClickEvent(this)">
                            <p>Domesticire</p>
                            <img src="../images/chevron-up.png" alt="up-arrow-filter-box">
                        </div>
    
                        <ul>
                            <!-- intr-un submit acel checkbox va avea opname=opval daca e setat, sau absolut nimic, daca nu -->
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                        </ul>
                    </div>

                    <div class="filtru" id="filtru-hrana">
                        <div class="nume-filtru" onclick="filtruClickEvent(this)">
                            <p>Locație</p>
                            <img src="../images/chevron-up.png" alt="up-arrow-filter-box">
                        </div>
    
                        <ul>
                            <!-- intr-un submit acel checkbox va avea opname=opval daca e setat, sau absolut nimic, daca nu -->
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                            <li> <input type="checkbox" name="opname" value="opval"> lorem ipsum</li>
                        </ul>
                    </div>
    
                </section>
    
            </section>

            
            <section id="partea-dreapta-pagina">
                
                <section id="bara-control">
                    
                    <div id="cautare-animale">
                        <div>
                            <div id="bara-de-cautare">
                                <i onclick="cautareAnimale()"  class="fa fa-search" aria-hidden="true"></i>
                                <input id="search-input" type="text" name="searchInput" placeholder="  Căutați animal" onkeyup="showResults(this.value)">
                            </div>
                            <div id="optiuni-cautare"><p onclick="trimitereSpreCautare(this)">ana</p><p onclick="trimitereSpreCautare(this)">mama</p></div>
                        </div>
                    </div>
                    
                    <section>
                        
                        <div class="sort-buton-drop">
                            <button onclick="functieButonSortareAnimale()" id="buton-sortare">
                                <p> <img src="../images/Vector (Stroke).png" alt="down-arrow-sort-button"> Sortați după</p>
                            </button>
                            <div onclick="restrangereOptiuniSortare()" id="optiuni-sortare-buton">
                                <a onclick="sortAnimalsAZ()">După nume A-Z</a>
                                <a onclick="sortAnimalsZA()">După nume Z-A</a>
                            </div>
                        </div>
                        
                        <button type="button" id="grid-linie" class="buton-grid" 
                            onclick="gridFormatEvent(this);gridClickEvent(this);">
                            <img src="../images/server.png" alt="line-grid-icon">
                        </button>
                        <button type="button" id="grid-patrate" class="buton-grid show" 
                            onclick="gridFormatEvent(this);gridClickEvent(this);">
                            <img src="../images/grid.png" alt="square-grid-icon">
                        </button>

                    </section>
                </section>
    
                <section id="animale-casute">
                    
                    <?php
                        $con = mysqli_connect("localhost", "tudor", "tudor", "tudor");
                        if (mysqli_connect_errno()){
                            echo 'Failed to connect';
                        }
                        
                        $sql = "SELECT nume,numeLatina,descriere FROM animals";
                        $stmt = mysqli_stmt_init($con);
                        if(!mysqli_stmt_prepare($stmt,$sql)) {
                            echo "Conectare esuata";
                        } else {
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);
                            while($row = mysqli_fetch_assoc($result)) {
                                echo '<div class="casuta-animal">
                                <div class="casuta-imagine">
                                    <div class="imagine"
                                        style="background-image:url(../images/syed-ahmad-yXTr6XeJDV8-unsplash.jpg);">
                                    </div>
                                </div>
                                <div class="detalii-animal-casuta">
                                    <h3 class="nume-animal">'.$row["nume"].'</h3>
                                    <h3 class="nume-animal-latina"><i>'.$row["numeLatina"].'</i></h3>
                                    <div class="descriere-animal">
                                        <h3 class="descriere-animal-titlu">Descriere</h3>
                                        <p class="descriere-animal-continut">'.$row["descriere"].'</p>
                                    </div> 
                                </div>
                            </div>';
                            }
                        }
                    ?>
                    <!-- <div class="casuta-animal">
                        <div class="casuta-imagine">
                            <div class="imagine"
                                style="background-image:url(../images/syed-ahmad-yXTr6XeJDV8-unsplash.jpg);">
                            </div>
                        </div>
                        <div class="detalii-animal-casuta">
                            <h3 class="nume-animal">Nume Animal - Tudor</h3>
                            <h3 class="nume-animal-latina"><i>Nume Animal</i></h3>
                            <div class="descriere-animal">
                                <h3 class="descriere-animal-titlu">Descriere</h3>
                                <p class="descriere-animal-continut">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ipsum nunc, porttitor eu dignissim ut, rhoncus non velit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ipsum nunc, porttitor eu dignissim ut, rhoncus non velit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div> 
                        </div>
                    </div>
    
                    <div class="casuta-animal">
                        <div class="casuta-imagine">
                            <div class="imagine"
                                style="background-image:url(../images/syed-ahmad-yXTr6XeJDV8-unsplash.jpg);">
                            </div>
                        </div>
                        <div class="detalii-animal-casuta">
                            <h3 class="nume-animal">Nume Animal - Ana</h3>
                            <h3 class="nume-animal-latina"><i>Nume Animal</i></h3>
                            <div class="descriere-animal">
                                <h3 class="descriere-animal-titlu">Descriere</h3>
                                <p class="descriere-animal-continut">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ipsum nunc, porttitor eu dignissim ut, rhoncus non velit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ipsum nunc, porttitor eu dignissim ut, rhoncus non velit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div> 
                        </div>
                    </div>
    
                    <div class="casuta-animal">
                        <div class="casuta-imagine">
                            <div class="imagine"
                                style="background-image:url(../images/syed-ahmad-yXTr6XeJDV8-unsplash.jpg);">
                            </div>
                        </div>
                        <div class="detalii-animal-casuta">
                            <h3 class="nume-animal">Nume Animal - Cristi</h3>
                            <h3 class="nume-animal-latina"><i>Nume Animal</i></h3>
                            <div class="descriere-animal">
                                <h3 class="descriere-animal-titlu">Descriere</h3>
                                <p class="descriere-animal-continut">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ipsum nunc, porttitor eu dignissim ut, rhoncus non velit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ipsum nunc, porttitor eu dignissim ut, rhoncus non velit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div> 
                        </div>
                    </div>
    
                    <div class="casuta-animal">
                        <div class="casuta-imagine">
                            <div class="imagine"
                                style="background-image:url(../images/syed-ahmad-yXTr6XeJDV8-unsplash.jpg);">
                            </div>
                        </div>
                        <div class="detalii-animal-casuta">
                            <h3 class="nume-animal">Nume Animal - Ioana</h3>
                            <h3 class="nume-animal-latina"><i>Nume Animal</i></h3>
                            <div class="descriere-animal">
                                <h3 class="descriere-animal-titlu">Descriere</h3>
                                <p class="descriere-animal-continut">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ipsum nunc, porttitor eu dignissim ut, rhoncus non velit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ipsum nunc, porttitor eu dignissim ut, rhoncus non velit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div> 
                        </div>
                    </div>
    
                    <div class="casuta-animal">
                        <div class="casuta-imagine">
                            <div class="imagine"
                                style="background-image:url(../images/syed-ahmad-yXTr6XeJDV8-unsplash.jpg);">
                            </div>
                        </div>
                        <div class="detalii-animal-casuta">
                            <h3 class="nume-animal">Nume Animal - Robert</h3>
                            <h3 class="nume-animal-latina"><i>Nume Animal</i></h3>
                            <div class="descriere-animal">
                                <h3 class="descriere-animal-titlu">Descriere</h3>
                                <p class="descriere-animal-continut">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ipsum nunc, porttitor eu dignissim ut, rhoncus non velit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ipsum nunc, porttitor eu dignissim ut, rhoncus non velit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div> 
                        </div>
                    </div>
    
                    <div class="casuta-animal">
                        <div class="casuta-imagine">
                            <div class="imagine"
                                style="background-image:url(../images/syed-ahmad-yXTr6XeJDV8-unsplash.jpg);">
                            </div>
                        </div>
                        <div class="detalii-animal-casuta">
                            <h3 class="nume-animal">Nume Animal - Alex</h3>
                            <h3 class="nume-animal-latina"><i>Nume Animal</i></h3>
                            <div class="descriere-animal">
                                <h3 class="descriere-animal-titlu">Descriere</h3>
                                <p class="descriere-animal-continut">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ipsum nunc, porttitor eu dignissim ut, rhoncus non velit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ipsum nunc, porttitor eu dignissim ut, rhoncus non velit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div> 
                        </div>
                    </div>
    
                    <div class="casuta-animal">
                        <div class="casuta-imagine">
                            <div class="imagine"
                                style="background-image:url(../images/syed-ahmad-yXTr6XeJDV8-unsplash.jpg);">
                            </div>
                        </div>
                        <div class="detalii-animal-casuta">
                            <h3 class="nume-animal">Nume Animal - Luiza</h3>
                            <h3 class="nume-animal-latina"><i>Nume Animal</i></h3>
                            <div class="descriere-animal">
                                <h3 class="descriere-animal-titlu">Descriere</h3>
                                <p class="descriere-animal-continut">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ipsum nunc, porttitor eu dignissim ut, rhoncus non velit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ipsum nunc, porttitor eu dignissim ut, rhoncus non velit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. In placerat lobortis est, nec commodo tellus congue et.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div> 
                        </div>
                    </div> -->

                </section>

            </section>

        </main>

    </body>
</html>