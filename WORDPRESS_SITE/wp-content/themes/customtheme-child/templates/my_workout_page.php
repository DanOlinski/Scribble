<?php
/**
 *Template Name: my workout page
 */

 get_header(); ?>

<div>
    <form 
    role="form" method="post"
    >
        <div>
            <label 
            for="workoutdate"
            >
            Workout Date
            </label>
                <input 
                id="workoutdate" 
                name="workoutdate" 
                type="date" 
                required=""
                >
        </div>
        <div>
            <label 
            for= "activity"
            >
            Activity
            </label>
            <input 
            id="activity" 
            name="activity" 
            type="text" 
            placeholder="activity" 
            required=""
            >
        </div>
        <div class="form-group">
            <input 
            id="user_id" 
            name="user_id" 
            type="hidden" 
            value="
                <?php echo get_current_user_id(); ?>" >
        </div>
        <div>
            <div>
                <input 
                type="submit" 
                value="Submit" 
                name="workoutformbtn"
                >
            </div>
        </div>
    </form>
    <div>
        <label>Workout History</label>
    </div>
    <div>
        <?php
            include './database-files/read_workout.php';
        ?>
    </div>
    
</div>

