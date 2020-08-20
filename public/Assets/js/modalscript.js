$( document ).ready(function() {
    $(".upd").click(
		function(){
            var data = {
                "id"    :   $(this).val(),
                "title" : $("#title"+$(this).val()).text(),
                "body"  :  $("#body"+$(this).val()).text(),
                'content': $("#content"+$(this).val()).text()
            };
            fullnews(data);
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
            deleting(data);
    });
    $(".add").click(
        function(){
            add();
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
function fullnews(additional){
    $.ajax({
        url: "/news/update",
        method:"POST",
        dataType: "html",
        data: additional,  
        success: function(response){
            $('#hole').html(response);
        },
        error: function(response){
            $('#hole').html(response);
        }
    });
}


function deleting(id){
    $.ajax({
        url:"/news/delete",
        method:"POST",
        dataType:"html",
        data: id,
        success: function(response){
            $('#hole').html(response);
        },
        error: function(response){
            $('#hole').html(response);
        }
    });
}

function add(){
    $.ajax({
        url:"/news/create",
        method:"POST",
        dataType:"html",
        success: function(response){
            $('#hole').html(response);
        },
        error: function(response){
            $('#hole').html(response);
        }
    });
}