$( document ).ready(function() {
    $("#modal_confirm").click(
		function(){
            modalAjax('modal_form', '/Send');     
		}
    );
});

function modalAjax(ajax_form, url) {
    $.ajax({
        url:     url, 
        headers: {'X-Requested-With': 'XMLHttpRequest'},
        dataType: "html", 
        data: $("#"+ajax_form).serialize(), 
        success: function(response) { 
            if(response=="We will call you later!"){
                $("#modal_confirm").addClass("d-none");
                $('#moduleform').html(response);
            }
            else{
                $('#result').html(response);
            }
    	},
    	error: function(response) {
            $('#result').html("Error");
    	}
 	});
}
