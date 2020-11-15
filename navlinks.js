$(".navimg").hover(function() {
    $(this).css('cursor','pointer');
}, function() {
    $(this).css('cursor','auto');
});

$(".navitem").click(function(){
    //Set Container
    container = $('.append');
    // Set $this for re-use. Set target from data attribute
    $this = $(this),
    target = $(this).find("a").data("target");    
  
    // Load target page into container
    container.load('./view/' + target + '.php');
    window.history.pushState(target, "Title", target);
  
    // Stop normal link behavior
    return false;
});

function goToQuest(target){
    //Set Container
    container = $('.append');

    // Load target page into container
    container.load('./view/' + target + '.php');
    window.history.pushState(target, "Title", target);

    // Stop normal link behavior
    return false;
}
function changeForm(form){
    console.log(form);

    if(form == "register"){
        $(".register-form").css({"display":"inherit"});
        $(".login-form").css({"display":"none"});
    }
    else if (form == "login"){
        $(".login-form").css({"display":"inherit"});
        $(".register-form").css({"display":"none"});
    }
}


function closeForm(){
    $(".bg-modal").remove();
    container.load('./view/home.php');
}

$(window).on('load', function(){
    container = $('.append');
    let currLoc = $(location).attr('href');
    let Loc = currLoc.split('/');
    container.load('./view/' + Loc[3] + '.php');
});