<?php
    /**
    *Template Name: home page
    */
    get_header();
?>

<!-- canvas is the space on the browser where the scribble lins can be drawn -->
<canvas id="can" width="5000" height="5000" class="canvas">
</canvas>

<div id="main"></div>

<?php
    include './wp-content/themes/customtheme-child/parts/s-notes.php';
    get_footer();
?>


