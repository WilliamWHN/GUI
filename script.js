$(document).ready(function(){
    // Set trigger and container variables
    var trigger = $('#a'),
        container = $('#content');
    
    // Fire on click
    trigger.on('click', function(){
      // Set $this for re-use. Set target from data attribute
      var $this = $(this),
        target = $this.data('target');       
      if(target == "login"){
        
      }
      // Load target page into container
      container.load('./view/' + target + '.php');
      
      // Stop normal link behavior
      return false;
    });
  });