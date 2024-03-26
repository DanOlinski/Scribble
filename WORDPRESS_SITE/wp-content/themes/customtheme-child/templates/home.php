<?php
/**
 *Template Name: home page
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./wp-content/themes/customtheme-child/build/style-index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scribble</title>

    <script src="./javascript/scribbleFunctionality.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body onload="init()">
    <header>
        <?php
            include './wp-content/themes/customtheme-child/parts/header.php';
            include './wp-content/themes/customtheme-child/parts/footer.php';
        ?>
    </header>
   

<canvas id="can" width="5000" height="5000" class="canvas">
</canvas>

<div class="scribble-options">
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

<div class="orange-pallet pallet-color-default" id="orange"
    onclick="color(this)">
</div>

<div class="white-pallet pallet-color-default" id="white"
    onclick="color(this)">
</div>
</div>

<div id="clr" onclick="erase()" class="clear-button">clear scribble</div>
</div>

<?php


include './wp-content/themes/customtheme-child/parts/s-notes.php';
?>

</body>
</html>