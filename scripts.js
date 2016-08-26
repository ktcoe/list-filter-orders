$(document).ready(function(){
    
    
    $("#close").click(function(){
        $("#popup").hide();
        $("body").removeClass("background-color");
        $("input").removeAttr("disabled", "disabled");
    });

    $(".order-details").click(function(){
        $("#popup").show();
        $("body").addClass("background-color");
        $("input").attr("disabled", "disabled");
    });
    
    
});

