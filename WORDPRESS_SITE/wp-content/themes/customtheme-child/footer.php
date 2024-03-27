<?php
    //the variable contain values from ACF fields
    $last_update = get_field('last_update');
?>

<div class="footer">
    This site was last updated on:
    <?php
        echo $last_update;
    ?>
</div>

</body>
</html>