$(document).ready(function(){
    // Set trigger and container variables
    var trigger = $('#a'),
        container = $('#content');
    
    // Fire on click
    trigger.on('click', function(){
      // Set $this for re-use. Set target from data attribute
      var $this = $(this),
        target = $this.data('target');       
      
      // Load target page into container
      container.load(target + '.php');
      
      // Stop normal link behavior
      return false;
    });
  });

$(".navimg").hover(function() {
    $(this).css('cursor','pointer');
}, function() {
    $(this).css('cursor','auto');
});


$(".navitem").click(function(){
    window.location=$(this).find("a").attr("href");
    return false;
});
