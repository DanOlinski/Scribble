//this script uses jQuery to display the about page or the home page without refreshing the browser

//only run the code after page is loaded
$(document).ready(function() {

    //select the html element by the id, run an action when it is clicked
    $('#about').click((event)=>{
        //prevent the page from reloading
        event.preventDefault();

        //hide some HTML elements
        $('#pallet-div').hide();
        $('#s-notes-db-container').hide();
        $('#divid').hide();

        //load the html file located in the specified path
        $('#main').load('./wp-content/themes/customtheme-child/parts/about.php');
    })

    //by clicking the home button the about page is removed
    //select the html element by the id, run an action when it is clicked
    $('#home').click((event)=>{
        //prevent the page from reloading
        event.preventDefault();

        //empty content of <div ="main">. This would be the content of the about page, in case the about page is being displayed, when clicking on the home link it will remove the about page from the browser
        $('#main').empty();
        

        //show the hidden html elements selected by id
        $('#pallet-div').show();
        $('#s-notes-db-container').show();
        $('#divid').show();
    })
});