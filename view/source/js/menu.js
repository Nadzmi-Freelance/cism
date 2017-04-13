var menuFadeIn = false;

$(document).ready(function() {
    $(".sub-menu").hide();

    $("#inisiatif").click(function() {
        dropMenu(".sub-menu");
    });
});

function dropMenu(eName) {
    if(menuFadeIn)
        $(eName).fadeOut();
    else
        $(eName).fadeIn();

    menuFadeIn = !menuFadeIn;
}
