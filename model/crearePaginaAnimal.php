<?php
$con = mysqli_connect('localhost', 'tudor', 'tudor', 'gradina_zoo');
if (mysqli_connect_errno()){
    echo '<h3>Failed to connect</h3>';
}

$animalName=$_GET['animalName'];

$sql = "SELECT * from animals where nume = '".$animalName."'";

$stmt = mysqli_stmt_init($con);
 if(!mysqli_stmt_prepare($stmt,$sql)) {
    echo "<h2>Conectare esuata</h2>";
 } else {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    while($row = mysqli_fetch_assoc($result)) {
    echo "<!DOCTYPE html>
    <html>
        <head>
            <title>".$row['nume']."</title>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <style>

            * {
                font-family: Helvetica, Arial, sans-serif;
                margin: 0;
                padding: 0;
                /*background-color: #d80c0c;*/
              }
            
            .background {
                  background-color: #ebfff7;
              }
            
              /* Add a black background color to the top navigation */
            .topnav {
                position: sticky;
                top: 0;
                background-color: #769385;
                text-align: center;
                overflow: hidden;
              }
            
              /* Style the links inside the navigation bar */
              .topnav a {
                display : inline-block;
                position: relative;
                color: #f2f2f2;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 20px;
              }
            
              .topnav a.loggo {
                width: 10;
                display : inline-block;
                position: relative;
                padding: 10px 50px;
              }
            
              /* Change the color of links on hover */
              .topnav a:hover {
                background-color: #637e71;
              }
            
              /* Add a color to the active/current link */
              .topnav a.active {
                background-color: #04AA6D;
                color: white;
              }
            
              #intro {
                background-image:linear-gradient(to bottom,rgba(255, 255, 255, 0) 0%,
                rgba(255, 255, 255, 0.8) 100%), url('tigru.jpg');
                background-size: cover;
                background-position: center;
                height: 100vh;
              }
            
              .title{
                font-size: 40px;
                text-align: center;
                margin: 20px;
              }
            
              .text{
                  font-size:17;
                  text-align: center;
                  padding-left: 100px;
                  padding-right: 100px;
              }
            
              .tabel
              {
                border:1px solid black;
                margin-left: auto;
                margin-right: auto;
              }
            
              .th
              {
                border:1px solid black;
                padding: 5px;
                font-size: larger;
              }
            
              .map{
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 40%;
              }
            
              .staff{
                margin-left: 100px;
                margin-right: 100px;
                border-radius: 50%;
                width:200px;
              }
            
              .tabel_staff{
                  padding-left: 100px;
                  padding-right: 100px;
              } 
            
            /*----------------------------------*/
            
              .centered-content{
                color: #00291f;
                text-align: center;
                padding-left: 10%;
                padding-right: 10%;
                display: flex;
                flex-direction: column;
              }
              .info-card p{
                font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
                text-align: left;
                font-size:30px;
                margin-left: auto;
                margin-right: auto;
                max-width: 50ch;
              }
            
              .font{
                font-size:20px;
                font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
              }
            
              .bottom-left {
                position: relative;
                bottom: 180px;
                left: -30%;
                font-size: 300%;
              }
            
              .bottom-border{
                border-bottom: 3px solid #00291f;
              }
            
              .margins{
                margin-top: 20px;
                margin-bottom: 100px;
              }
            
              .img-background{
                background-color: rgba(0, 29, 12, 0.2);
              }
            
              .myImage {
                width: 90%;
                height: 500px;
                object-fit: cover;
              }
            
              .textarea {
                width: 100%;
                height: 150px;
                padding: 15px 20px;
                box-sizing: border-box;
                border: 3px solid #ccc;
                border-radius: 8px;
                background-color: #f8f8f8;
                resize: none;
                font-size: 18px;
              }
              
              .form-placement {
                padding-left: 30%;
                padding-right: 30%;
                display: flex;
                flex-direction: column;
              }
            
              .text-input{
                padding: 15px 8px;
                box-sizing: border-box;
                border: 3px solid #ccc;
                border-radius: 8px;
                width: 99%;
                height: 30px;
                font-size: 18px;
              }
            
              .box{
                display: flex;
                row-gap: 40px;
              }
            
              .submit-button{
                width: 200px;
                height: 30px;
                font-size: 18px;
                padding-bottom: 30px;
              }
            
              .bottom-padding{
                padding-bottom: 200px;
              }
            
              @media (max-width: 1000px) {
                .topnav a {
                  float:none;
                  width: 100%;
                }
                .centered-content{
                  padding-left: 0%;
                  padding-right: 0%;
                }
            
                .myImage {
                  width: 100%;
                  height: 300px;
                }
            
                .img-position{
                  position: static;
                }
            
                .bottom-left {
                  position: relative;
                  bottom: 180px;
                  left: -25%;
                  font-size: 300%;
                }
            
                .centered-content {
                  flex-direction: column;
                }
                .form-placement {
                  padding-left: 5%;
                  padding-right: 5%;
                  display: flex;
                  flex-direction: column;
                }
                .textarea {
                  width: 100%;
                }
              }
            

            </style>
        </head>
        <body class = 'background'>
            <div class='topnav'>
                <a href='#loggo' class='loggo'><img src = '../../img/pages/tigru.jpg' width = 30px;></a>
                <a href='#animale'>Toate animalele</a>
                <a href='#program'>Program</a>
                <a href='#harta'>Harta</a>
                <a href='#rezervari'>Rezerva un loc!</a>
                <a href='#echipa'>Staff</a>
            </div> 

            <div class = 'centered-content box img-background'>
                <div class='info-card bottom-border img-background'>
                    <div>
                        <img src='../../img/animals/".$row['nume']."_mainimg' class = 'myImage margins img-position' alt='Animal photo'>
                    </div>
                </div>
                <div class='info-card bottom-border img-background'>
                    <p class='margins'>".$row['descriere']."</p>
                </div>
                <div class='info-card bottom-border img-background'>
                    <div>
                        <img src='../../img/animals/".$row['nume']."_habitatimg' class = 'myImage margins img-position' alt='Animal photo'>
                    </div>
                    <p class='margins'>".$row['raspandire']."</p>
                </div>
                <div class='info-card bottom-border img-background'>
                    <div>
                        <img src='../../img/animals/".$row['nume']."_trasaturiimg' class = 'myImage margins img-position' alt='Animal photo'>
                    </div>
                    <p class='margins'>".$row['trasaturi_distinctive']."</p>
                </div>
                <div class='info-card bottom-border img-background'>
                    <div>
                        <img src='../../img/animals/".$row['nume']."_hranaimg' class = 'myImage margins img-position' alt='Animal photo'>
                    </div>
                    <p class='margins'>".$row['Hrana']."</p>
                </div>
                <div class='info-card bottom-border img-background'>
                    <div>
                        <img src='../../img/animals/".$row['nume']."_socialimg' class = 'myImage margins img-position' alt='Animal photo'>
                    </div>
                    <p class='margins'>".$row['descriere_viata_sociala']."</p>
                </div>
                <div class='info-card bottom-border img-background'>
                    <div>
                        <img src='../../img/animals/".$row['nume']."_reproducereimg' class = 'myImage margins img-position' alt='Animal photo'>
                    </div>
                    <p class='margins'>".$row['reproducere']."</p>
                </div>
                <div class='info-card bottom-border img-background'>
                    <p class='margins'>".$row['altele']."</p>
                </div>
            </div>
    
        </body>
    </html>";
    }
 }
