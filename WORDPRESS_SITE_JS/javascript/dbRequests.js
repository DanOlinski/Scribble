//This script loads the notes from the database, it also creates new notes, by appending new created notes to the dom and at the same time sending a request to the database to add the new note there. This way the page doesn't need to be refreshed to show changes done by the user


  $(document).ready(function(){

    //In order to only display the data to the correct user without generating a login function, the user can only view data that was saved from his IP address
    //the ajax below fetches the user's IP address
    $.ajax({ 
      method: "get",
        url: "http://ip-api.com/json",
        context: document.body,
        success: function(data){
          
          let userIP = data.query
          
          //this generates a unique ID number for new notes
          let noteId = 5

          //this gets all of the notes that where added by the user with a given IP address, then loads the notes into the browser
          $.ajax({ 
            method: "put",
            data: {ip: userIP},
            // url: "http://localhost:8101/notes",
            url: "http://3.147.237.154:8101/notes",
              context: document.body,
              success: function(data){
                
                $('#main').empty();
                
                //loop through all data coming from batabase and append each note individually
                for (let i of data){
                  //make sure ID number keeps increasing, according to ID numbers coming in from DB, so that when a new note is created the ID will be unique (not the best way of soing this but for the purpose of this website it works great)
                  if (noteId < i.id){
                    noteId += 1
                  }
                  
                  console.log(i)
                  //append notes
                  $('#s-notes-db-container').append(renderNote(i))
                }
              }
          });

         //When the user creates a new note, the info is added to the database and appended on the front end without refreshing the database 
         $('#new_note').click(function(e){
            e.preventDefault();
      
            //only create a new note if there is a value typed in
            if ($('#text').val()){

          //make sure ID is unique
          noteId += 1

          //send request to DB to add the note
          $.ajax({ 
            method: "put",
            data: {user_id:userIP, note: $('#text').val(), id:noteId},
            // url: "http://localhost:8101/notes/new",
            url: "http://3.147.237.154:8101/notes/new",
            context: document.body,
            success: function(data){
      
              const obj = {id: noteId, note: $('#text').val()}
              //append note to browser
              $('#s-notes-db-container').append(renderNote(obj))
              
              //empty the value written in the new note form
              $('#text').val('').empty();
              
              
      
              }
          });
            }
      
      
          console.log(noteId)
         });

        }
    });

    

});

