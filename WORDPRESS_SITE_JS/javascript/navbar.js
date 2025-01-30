//this script uses jQuery to display the about page or the home page without refreshing the browser

//only run the code after page is loaded
$(document).ready(function() {

    //select the html element by the id, run an action when it is clicked
    $('#about').click((event)=>{
        //prevent the page from reloading
        event.preventDefault();

        //remove pallet
        $('#pallet-div').hide();
        
        $('#s-notes-db-container').hide();
        $('#divid').hide();

        //load the html file located in the specified path
        $('#main').load('./wp-content/themes/customtheme-child/parts/about.php');
    })

    //select the html element by the id, run an action when it is clicked
    $('#home').click((event)=>{
        //prevent the page from reloading
        event.preventDefault();

        //empty content of <div ="main">. This would be the content of the about page, in case the about page is being displayed, when clicking on the home link it will remove the about page from the browser
        $('#main').empty();
        

        //load the html file located in the specified path to place pallet back in the page
   
        $('#pallet-div').show();
        $('#s-notes-db-container').show();
        $('#divid').show();
    })
});