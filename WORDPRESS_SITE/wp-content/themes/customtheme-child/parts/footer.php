<link rel="stylesheet" href="./wp-content/themes/customtheme-child/build/style-index.css">

<?php
$last_update = get_field('last_update');
?>
<div class="footer">
This site was last updated on:
    <?php
        echo $last_update;
    ?>
</div>