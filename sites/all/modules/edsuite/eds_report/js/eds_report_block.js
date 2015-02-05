$(document).ready(function(){
    $("#custom-report-help").css('opacity', 0);
    $("#save-and-report-container").hover(
        function(){
            $("div#custom-report-help").show().animate({opacity:1}, {queue:false, duration:500});
        },
        function(){
            $("div#custom-report-help").animate({opacity:0}, {queue:false, duration:500, complete:function(){$(this).hide();}});
        }
    );
});