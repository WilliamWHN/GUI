$(".navimg").hover(function() {
    $(this).css('cursor','pointer');
}, function() {
    $(this).css('cursor','auto');
});

$(".navitem").click(function(){
    //Set Container
    container = $('.content');
    // Set $this for re-use. Set target from data attribute
    $this = $(this),
    target = $(this).find("a").data("target");    
  
    // Load target page into container
    container.load('./view/' + target + '.php');
  
    // Stop normal link behavior
    return false;
});
