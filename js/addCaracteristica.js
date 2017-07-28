function addTodoItem() {
  var todoItem = $("#newItem").val();
  $("#todo-list").append("<li><input type='checkbox'" + 
                         " name='todo-item-done'" + 
                         " class='todo-item-done'"+ 
                         " value='" + todoItem + "' /> " +"&nbsp;"+ 
                         todoItem +
                         " <button class='todo-item-delete'>"+
                         "-</button></li>");
  
 $("#newItem").val("");
}

function deleteTodoItem(e, item) {
  e.preventDefault();
  $(item).parent().fadeOut('slow', function() { 
    $(item).parent().remove();
  });
}

                           
function completeTodoItem() {  
  $(this).parent().toggleClass("strike");
}


$(function() {
 
   $("#addItem").on('click', function(e){
     e.preventDefault();
     addTodoItem()
   });
  
//EVENT DELEGATION
//#todo-list is the event handler because .todo-item-delete doesn't exist when the document loads, it is generated later by a todo entry
//https://learn.jquery.com/events/event-delegation/
  $("#todo-list").on('click', '.todo-item-delete', function(e){
    var item = this; 
    deleteTodoItem(e, item)
  })
  
  $(document).on('click', ".todo-item-done", completeTodoItem)

});