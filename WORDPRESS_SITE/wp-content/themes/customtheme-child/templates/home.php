<?php
/**
 *Template Name: home page
 */

 get_header();
?>
    <script src="./javascript/scribbleFunctionality.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<body onload="init()">

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

<div class="purple-pallet pallet-color-default" id="purple"
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

get_footer();
?>

</body>