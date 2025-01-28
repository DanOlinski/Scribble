//I can request data using ajax from scheduler but not from the new server
//I'm thinking it might be that scheduler server is sending cleaner data 

//install nodemon on scheduler server to compare with the info(mabe I don't need nodemon)

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
          // url: "http://54.236.160.67:8001/api/days",
          url: "http://54.158.56.227:8100/notes",
          success: function(data){
            console.log(data)
          }
      })

    })
})