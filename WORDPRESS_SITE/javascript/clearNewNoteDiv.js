//This script is used to clear the new note form after it is submitted, it also handles the info typed into the form so that the info can be processed in php and save the new note into the database

//only run the code after page is loaded
$(document).ready(function() {

    //select the html element by the id, run an action when it is clicked
    $('#form').click((event)=>{
        //prevent page from loading
        event.preventDefault();

        //before running the script check if there is a value typed into the new note form
        if($('#text').val()) {
            console.log($('#text').val())
            
            //grab the form data and make it available in the specified url, where the php code can handle the data and save it in the database
            $.ajax({
                method: "post",
                // url: "http://localhost:8000/",
                // url: "http://18.234.204.90:8000/",
                url: "http://44.211.216.107:8000/",
                data: $('#form').serialize(),
                dataType: "text",
            })

            // Response.Redirect("Currentpage.aspx",true);

            //reload the page so that the newly created note can be loaded from the database onto the front end
            location.reload();

            
        }
    })
});