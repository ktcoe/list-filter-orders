$(document).ready(function(){
    
//Popup functionality
    
    $(".order-details").click(function(){
        $("#popup").show();
        $("body").addClass("background-color");
        $("input").attr("disabled", "disabled");
    });
    
    $("#close").click(function(){
        $("#popup").hide();
        $("body").removeClass("background-color");
        $("input").removeAttr("disabled", "disabled");
    });
    
//Date selections
    
    $('#submit').click(function() {
	    sendData();
    });

//send feedback information to php and database
    function sendData() {
	    var startDate = ($('#start').val());
	    var endDate = ($('#end').val());

    	sendInfo = {'start':startDate,'end':endDate};

        jQuery.ajax({
	    	type: 'GET',
	    	url: 'getorders.php',
	    	data: sendInfo,
	    	dataType: 'jsonp',
		    success: function(data) {
				if (data.errorText) {
					$('div#errortext').append('<p class="errorText">' + data.errorText + '</p>');
				} 
				else {
				    // data loaded onto page
				}
			    },
		    complete: function() {
			    }
	    });
    }
    
//Order number selection
    $('.order-details').click(function() {
	    sendData();
    });
    
    //send feedback information to php and database
    function sendData() {
	    var orderNumber = ($('.order-details').val());

    	sendInfo = {'order':orderNumber};

        jQuery.ajax({
	    	type: 'GET',
	    	url: 'getorders.php',
	    	data: sendInfo,
	    	dataType: 'jsonp',
		    success: function(data) {
				if (data.errorText) {
					$('div#errortext').append('<p class="errorText">' + data.errorText + '</p>');
				} 
				else {
				    // data loaded onto page
				}
			    },
		    complete: function() {
			    }
	    });
    }

});