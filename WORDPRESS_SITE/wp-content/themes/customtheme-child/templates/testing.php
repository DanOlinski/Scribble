<?php

/**
 * Template Name: Testing Page
 */

include './mydbfile.php';
global $wpdb;
include './wp-load.php';

if (strlen($_POST['text']) > 0) {

    $new_note = $_POST["text"];

    var_dump($new_note);
    // var_dump(count($_POST['text']));


    $sql = "insert into test_table (text) values('$new_note')";

    $conn->query($sql);
    // var_dump($sql);

    
}

//read
$sql = "select * from test_table";

$result = $conn->query($sql);

$result_arr = $result->fetch_all();

$conn->close();

?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./wp-content/themes/customtheme-child/build/style-index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scribble - Testing Page</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript">



        $(document).ready(function() {

            $('#form').click((event)=>{
                event.preventDefault();


                if($('#text').val()) {

                    $.ajax({
                method: "post",
                url: "http://localhost:8000/?page_id=397&preview=true",
                data: $('#form').serialize(),
                dataType: "text"

                })

                $('#form').empty();

                $('#form').append($(`<form id="form" method="post">
                <input id="text" name="text" type="text" value="">
                <input id="button" type="submit" value="Submit">
                </form>`));
                
                }

            })


        });

    </script>


</head>

<body>



<div id="test" class="test">

<form id="form" method="post">

    <input id="text" name="text" type="text" value="">
    <input id="button" type="submit" value="Submit">


</form>



</div>

<div id="div">
<?php
echo 'db entries :';
echo count($result_arr);
?>
</div>



<?php
var_dump($_GET[test]);
var_dump($_POST[test]);
?>


</body>
</html>