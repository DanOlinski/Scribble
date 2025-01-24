//This script is used to clear the new note form after it is submitted, it also handles the info typed into the form so that the info can be processed in php and save the new note into the database

//only run the code after page is loaded
$(document).ready(function() {

    //select the html element by the id, run an action when it is clicked
    $('#form').click((event)=>{
        //prevent page from loading
        event.preventDefault();

        //before running the script check if there is a value typed into the new note form
        if($('#text').val()) {

            //grab the form data and make it available in the specified url, where the php code can handle the data and save it in the database
            $.ajax({
                method: "post",
                url: "http://http://18.234.204.90:8000/",
                data: $('#form').serialize(),
                dataType: "text",
            })

            //after the data is made available for pho script empty out the html element (some browsers like chrome have caching features making the app think there is always data typed into the form, causing the app to save repeated data into the database when the browser is refreshed)
            $('#form').empty();

            //after the html element is emptied out, it needs to be placed in the browser once again for the next data entry to be possible
            $('#form').append($(`
                <input id="new_note" class="s-notes-submit" type="submit" name="notes_create" value="✔"> 
                <textarea id="text" class="s-notes-input" name="new_note" required="" value=""></textarea>
            `));

            //reload the page so that the newly created note can be loaded from the database onto the front end
            location.reload();
        }
    })
});