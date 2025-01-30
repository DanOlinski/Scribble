<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Scribble</title>

        <link rel="stylesheet" href="./wp-content/themes/customtheme-child/build/style-index.css">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="./javascript/scribbleFunctionality.js" ></script>
        <script src="./javascript/renders/renders.js" ></script>
        <script src="./javascript/navbar.js" ></script>
        <script src="./javascript/clickAction.js" ></script>
       
       
        <script type="module"  src="./javascript/dbRequests.js" ></script>
       
        <script type ="application/ld+json">
            //in order to test if the schema is working visit: https://developers.google.com/search/docs/advanced/structured-data
            //update this information after launching website
            {
                "@content":"http://localhost:8000/about"
                "@type":"personal"
                "@id":"http://localhost:8000/"
                "Name":"Scribble"
                "url":"http://localhost:8000/"
            }
        </script>

        
    </head>

    <body onload="init()" class='body'>

        <header>

            <div class="header">

                <div class='left-of-header'>
                <img id='logo' class='logo' src="./wp-content/themes/customtheme-child/assets/logo.png">
                
                <div class="header-links" >Scribble
                </div>
                </div>

                
                <div class='right-of-header'>
                <div id="home" class="header-links" >&#160&#160&#160Home
                </div>

                <div class="home-link">&#160|&#160
                </div>

                <div id="about" class="header-links" >About
                </div>
                </div>
            </div>



<?php
include './wp-content/themes/customtheme-child/parts/pallet.php';

?>


           <script>
            // console.log(document.querySelector('#form1'))
            // console.log(document.querySelector('#s-notes-db-container'))
           </script>

        </header>

