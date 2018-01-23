$(document).ready(function(){
    $("#but1").click(function(){
        $("#div1").fadeIn();
        $("#div2").fadeIn("slow");
        $("#div3").fadeIn(3000);
        $("#div4").fadeIn("fast");
    });
});

$(document).ready(function(){
    $("#but2").click(function(){
        $("#div5").animate({
          height: 'toggle'
        });
    });
});
