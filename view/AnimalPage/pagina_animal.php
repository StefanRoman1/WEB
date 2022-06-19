<!DOCTYPE html>
<html>
    <head>
        <link href="Style/Css.css" type="text/css" rel="stylesheet">
        <title>Pagina Animal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body class = "background">
        <div class="topnav">
            <a href="#loggo" class="loggo"><img src = "../../img/pages/tigru.jpg" width = 30px;></a>
            <a href="#animale">Toate animalele</a>
            <a href="#program">Program</a>
            <a href="#harta">Harta</a>
            <a href="#rezervari">Rezerva un loc!</a>
            <a href="#echipa">Staff</a>
        </div> 
        <div class = "centered-content box img-background">
            <div class="info-card bottom-border img-background">
                <div>
                    <img src="../images/tigru.jpg" class = "myImage margins img-position" alt="Animal photo">
                    <div class="bottom-left font">Descriere</div>
                </div>
                <?php
                    include "../model/animale_db.php";
                    $animal_info = get_animals();
                    $animal_info = array_values($animal_info);
                    echo $animal_info[0]['Descriere'];
                    $img = "https://lh3.googleusercontent.com/244T0EBXSeM4jwyAAyK0k4kPyYczsdryBKOeoVu6Gfz5zcq02jgo9SjVV-Z8KWj8UQkSmKN8kVITcnmiI1zWzknFviXt25RG52KNT3Ldmv6rA-7rMfjKBMS5Nmb5vYG00mGzGGWvQS2XgT2TVihXH_pHQx8paBZfIEwbYVkkOpQ_J5gZCPa8yfiED14IhsADALRLjNwKbw4Ows-Rxm2PG2kDzWHhOm5JC0SGXlQWLYM7iPhGBdtKoUp3JFjhw428A05KXG5hDv8ZN5F_diS7LC_fv7-OFzmaU41k8xw2sIFwNJWAYvHMCX55kULhSoH0IM9abn3VC7LmbJQKYaqDaMnPEntnDTn1r6R3MUx376sZRuTTzw-iuavLrBCSPT0HxG4iE9VRMWj-I9_HSQF0divvJS4cHqy1TEriTyfE2YcF7bOdGaOuGsC1yDIjRkZRFSPW0MhK95Z5z83WoO9cMZitUpB-L4cSI5gRHGX0VG3F4iByG459rujxKPLw8jP1e2lR5as5_XS581lGWOYdCs0UiS-_qFV4NyFkmt6USHz4VNwKqSi1brfOqr0htD5O7nN_LW8OfbPSJUA_XT2DQEnD2bp2eYjFL8qacAI4fWpxVtos8pVesjX-NOApSK5z9OQRY_yufcL6T12mQXCsDf7GW-F71-lvXyf7RHHZYCenTeI2LLmZM46HNagSFuiWz257ndko67t1xsizTSuhCBS9wVAeErSbjdwbJE4MAnzmY94csXe7jkRslEuKfA=w425-h943-no?authuser=0g";
                ?>
            <div>
                    <img src=<?= $img?> class = "myImage margins img-position" alt="Animal photo">
                    <div class="bottom-left font">Descriere</div>
                </div>
                <p class="margins"><?= $animal_info[0][2];?></p>
            </div>
            <div class="info-card bottom-border img-background">
                <div>
                    <img src="tigru.jpg" class = "myImage margins img-position" alt="Animal photo">
                    <div class="bottom-left font">Raspandire</div>
                </div>
                <p class="margins">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="info-card bottom-border img-background">
                <div>
                    <img src="tigru.jpg" class = "myImage margins img-position" alt="Animal photo">
                    <div class="bottom-left font">Trasaturi</div>
                </div>
                <p class="margins">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="info-card bottom-border img-background">
                <div>
                    <img src="tigru.jpg" class = "myImage margins img-position" alt="Animal photo">
                    <div class="bottom-left font">Hrana</div>
                </div>
                <p class="margins">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="info-card bottom-border img-background">
                <div>
                    <img src="tigru.jpg" class = "myImage margins img-position" alt="Animal photo">
                    <div class="bottom-left font">Viata sociala</div>
                </div>
                <p class="margins">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="info-card bottom-border img-background">
                <div>
                    <img src="tigru.jpg" class = "myImage margins img-position" alt="Animal photo">
                    <div class="bottom-left font">Reproducere</div>
                </div>
                <p class="margins">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="info-card bottom-border img-background">
                <div>
                    <img src="tigru.jpg" class = "myImage margins img-position" alt="Animal photo">
                    <div class="bottom-left font">Altele</div>
                </div>
                <p class="margins">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>

    </body>
</html>