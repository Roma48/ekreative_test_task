$(document).ready(function(){
    $("#dashboard ul.links").superfish({ speed:"fast", autoArrows:false, dropShadows:false });
    
    $("#dashboard").hover(
        function() {
            $("#dashboard").animate({height: "133px"}, {duration: 1000, queue: false});
        },

        function() {
            $("#dashboard").animate({height: "0px"}, {duration: 1000, queue: false});
        }
    );
});