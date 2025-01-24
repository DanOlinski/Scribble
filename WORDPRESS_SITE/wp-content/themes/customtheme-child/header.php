<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Scribble</title>

        <link rel="stylesheet" href="./wp-content/themes/customtheme-child/build/style-index.css">

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="./javascript/scribbleFunctionality.js" ></script>
        <script src="./javascript/navbar.js" ></script>
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

    <body onload="init()">
        <header>
            <div class="header">

                <div class='left-of-header'>
                <img class='logo' src="./wp-content/themes/customtheme-child/assets/logo.png">
                
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

            <div id="pallet-div" class="scribble-options">
                <div class="pallet">
                
                    <div class="green-pallet pallet-color-default" id="green"
                    onclick="color(this)">
                    </div>

                    <div class="blue-pallet pallet-color-default" id="blue"
                        onclick="color(this)">
                    </div>

                    <div class="red-pallet pallet-color-default" id="red"
                        onclick="color(this)">
                    </div>

                    <div class="yellow-pallet pallet-color-default" id="yellow"
                        onclick="color(this)">
                    </div>

                    <div class="purple-pallet pallet-color-default" id="purple"
                        onclick="color(this)">
                    </div>

                    <div class="white-pallet pallet-color-default" id="white"
                        onclick="color(this)">
                    </div>
                </div>

                <div id="clr" onclick="erase()" class="clear-button">clear scribble
            </div>

            <div class="construction">SITE UNDER CONSTRUCTION!
            </div>

        </header>

