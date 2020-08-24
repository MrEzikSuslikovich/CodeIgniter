$( document ).ready(function() {
    $(".upd").click(
		function(){
            var data = {
                "id"    :   $(this).val(),
                "title" : $("#title"+$(this).val()).text(),
                "body"  :  $("#body"+$(this).val()).text(),
                'content': $("#content"+$(this).val()).text()
            };
            NewsControlFunction("/news/update",data);
		}
    );
    $("#modal_confirm").click(
		function(){
            modalAjax('modal_form', '/Send');     
		}
    );
    $(".del").click(
        function(){
            var data = {
                "id"    :   $(this).val()
            }
            NewsControlFunction("/news/delete",data);
    });
    $(".add").click(
        function(){
            var data = {
            }
            NewsControlFunction("/news/create",data);
    });
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

function NewsControlFunction(url,data){
    $.ajax({
        url: url,
        method:"POST",
        dataType:"html",
        data: data,
        success: function(response){
            $('#hole').html(response);
        },
        error: function(response){
            $('#hole').html(response);
        }
    });
}