//I can request data using ajax
//the data can only be fetched from a different url: doent work on local host
//finish building the backend server and deploy it so that I can try to append info from and to the front end
//create a repo with an expressjs server made to test API requests

//only run the code after page is loaded
$(document).ready(function() {

    //select the html element by the id, run an action when it is clicked
    $('#logo').click((event)=>{
        //prevent page from loading
        event.preventDefault();

        alert('test')


        $.ajax({
          method: "get",
          // url: "http://localhost:8000/",
          url: "http://54.236.160.67:8001/api/days",
          success: function(data){
            console.log(data)
          }
      })

    })
})