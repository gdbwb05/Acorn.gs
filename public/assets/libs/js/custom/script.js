$(function(){
    SyntaxHighlighter.all();
});
$(window).load(function(){
    $('.flexslider').flexslider({
        animation: "slide",
        animationLoop: true,
        controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
        directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
        prevText: "Previous",           //String: Set the text for the "previous" directionNav item
        nextText: "Next",  
        start: function(slider){
            $('body').removeClass('loading');
        }
        
    });
});


