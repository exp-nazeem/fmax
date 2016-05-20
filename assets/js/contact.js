$(function() {
	$("#Feedback").click(function (){
		if($.trim($("#name").val()) == ""){
            $("#name").focus();
            return false;
        }   
		if(isValidEmailAddress($("#email").val()) == false){
            $("#email").focus();
            return false;
        }   
        if($.trim($("#phone").val()) == ""){
            $("#phone").focus();
            return false;
        }   
        if($.trim($("#message").val()) == ""){
            $("#message").focus();
            return false;
        }   
		var person = {
            email: $.trim($("#email").val()),
            name: $.trim($("#name").val()),
            phone: $.trim($("#phone").val()),
            company: $.trim($("#company").val()),
            message: $.trim($("#message").val()),
            newsletter: $('#newsletter').is(":checked"),
        }
        
        $("#Feedback").prop('disabled', true);

		jQuery.ajax({
            url: 'subscribe/feedback',
            method: "POST",    
            contentType: 'application/json',   
            data: JSON.stringify(person),                    
            success: function(data) {
                $(".message").html("<strong>Thank you</strong> for writing to us! We will get back to you on this as soon as possible.");
                $(".message").show("slow");
               	$("#email, #name, #phone, #company, #message").val("");
                $("#Feedback").prop('disabled', false);
            }
        });
	});

    $("#partnersubmit").click(function (){
        if($.trim($("#name").val()) == ""){
            $("#name").focus();
            return false;;
        }  
       
        if(isValidEmailAddress($("#email").val()) == false){
            $("#email").focus();
            return false;
        }   
        if($.trim($("#phone").val()) == ""){
            $("#phone").focus();
            return false;
        } 
         if($.trim($("#jobs").val()) == ""){
            $("#jobs").focus();
            return false;
        }   
        if($.trim($("#message").val()) == ""){
            $("#message").focus();
            return false;
        }   
        var person = {
            name: $.trim($("#name").val()),
            jobs: $.trim($("#jobs").val()),
            company: $.trim($("#company").val()),
            address: $.trim($("#address").val()),
            country: $.trim($("#country").val()),
            phone: $.trim($("#phone").val()),
            email: $.trim($("#email").val()),
            website: $.trim($("#website").val()),
            message: $.trim($("#message").val()),
        }
        $("#partnersubmit").prop('disabled', true);

        jQuery.ajax({
            url: 'subscribe/partner',
            method: "POST",    
            contentType: 'application/json',   
            data: JSON.stringify(person),                    
            success: function(data) {
                $(".message").html("<strong>Thank you</strong> for writing to us! We will get back to you on this as soon as possible.");
                $(".message").show("slow");
                $("#name, #jobs, #company,#address, #phone, #email, #website, #message, #country ").val("");
                $("#partnersubmit").prop('disabled', false);
            }
        });
    });
});

function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
}