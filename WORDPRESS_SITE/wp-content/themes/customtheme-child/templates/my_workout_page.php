<?php
/**
 *Template Name: my workout page
 */

 get_header(); ?>

<div>
    <form method="POST" role="form">
        <table >
            <td>
                <input type="date" name="workoutdate" required="">
            </td>

            <td>
                <input type="text" name="activity" required="">
            </td>

            <td>
                <input id="user_id" name="user_id" type="hidden" value="
                    <?php echo get_current_user_id(); ?>" >
                <input type="submit" name="workoutformbtn" value="Submit">
            </td>
        </table>
    </form>
  
    <?php
        include './database-files/read_workout.php';
    ?>
</div>