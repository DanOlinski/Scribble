//select appended elements
//change croll for notes to scroll instead of the whol page

//only run the code after page is loaded=$(document).ready(function() {
  $(document).ready(function(){

    

   

    $.ajax({ 
      method: "get",
        url: "http://ip-api.com/json",
        context: document.body,
        success: function(data){
          let userIP = data.query
          let noteId = data.query+5

          $.ajax({ 
            method: "get",
            data: userIP,
            // url: "http://localhost:8101/notes",
            url: "http://54.158.56.227:8101/notes",
              context: document.body,
              success: function(data){
      
                $('#main').empty();
                
                for (let i of data){
                  
                  if (noteId < i.id){
                    noteId = i.id+1
                  }
      
                  $('#s-notes-db-container').append(renderNote(i))
                  
                }
      
              }
          });
      
         $('#new_note').click(function(e){
            e.preventDefault();
      
            if ($('#text').val()){
                  //add new note
          noteId += 1
          $.ajax({ 
            method: "put",
            data: {user_id:userIP, note: $('#text').val(), id:noteId},
            // url: "http://localhost:8101/notes/new",
            url: "http://54.158.56.227:8101/notes/new",
            context: document.body,
            success: function(data){
      
              const obj = {id: noteId, note: $('#text').val()}
              
              $('#s-notes-db-container').append(renderNote(obj))
              
      
              $('#text').val('').empty();
              
              
      
              }
          });
            }
      
      
          // console.log(noteId)
         });

        }
    });

    

});

