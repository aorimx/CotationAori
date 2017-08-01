function addTodoItem() {
  var todoItem = $("#newItem").val();
  $("#todo-list").append("<li><input type='checkbox'" + 
                         " name='todo-item-done" + todoItem +"'"+
                         " class='todo-item-done'"+ 
                         " value='" + todoItem + "' checked/> " +"&nbsp;"+ 
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
  



/*method="post" action="http://localhost/quotation/app/solicitudes/solicitud.php"*/

  /*$("#formulario").submit(function(e){
   e.preventDefault();
    var nombre = document.getElementById("inNombre").value;

    var empresa = document.getElementById("empresa").value; 

    var correo = document.getElementById("correo").value;

    var telefono = document.getElementById("telefono").value;

    var x = document.getElementById("typePage").selectedIndex;
    var y = document.getElementById("typePage").options;
    var tipo= y[x].text;


      var array = [];

    $(".todo-item-done:checked").each(function(i, obj){
      var tmp = obj.value;

      array[i] = tmp
 
      })

      console.log(array)

      $.ajax({
        type: 'POST',
        crossDomain: true,
         dataType : 'text',
            contentType : 'application/pdf',

        url: 'http://localhost/quotation/app/solicitudes/solicitud.php',
        data: {
            'inEmail': 'empresa'
      },
      success: function(msg){
           var blob=new Blob([msg]);
            var link=document.createElement('a');
            link.href=window.URL.createObjectURL(blob);
            link.download="Cotizacion"+new Date()+".pdf";
            link.click();
      }
    });
    //alert('hola' + nombre)
  })*/



//EVENT DELEGATION
//#todo-list is the event handler because .todo-item-delete doesn't exist when the document loads, it is generated later by a todo entry
//https://learn.jquery.com/events/event-delegation/
  $("#todo-list").on('click', '.todo-item-delete', function(e){
    var item = this; 
    deleteTodoItem(e, item)
  })
  
  $(document).on('click', ".todo-item-done", completeTodoItem)

});
