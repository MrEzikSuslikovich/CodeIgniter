$( document ).ready(function() {

    /*var date = new Date(),
    day = date.getDay(),
    h = date.getHours(),
    time = 5000;                      
    alert(day+" "+h);
if(((day > 3 && h > 12) && (day <= 5  && h <= 17))){
    alert("da");
}else{
    alert("net");
}*/
    var url=window.location.href;
    $('.nav-link ').each(function() {  
        if($(this).attr('href')==window.location.pathname){
            $(this).addClass("active");
        }
        else{
            $(this).removeClass('active');
        }
    });
    if($("a.ml-1").not($("a.ml-1").hasClass("active"))){
        $("a#1").addClass("active");
    }
    $('.ml-1').each(function() {  

        if($(this).attr("id")==url[url.length -1]){
            $(this).addClass("active");
            $("a#1").removeClass('active');
        } 

    });
    $("#pag"+url[url.length -1]).click(function(){
        $(this).addClass("active");
    });
    var url="/news/form";
    $(".upd").click(
		function(){

            var data = {
                "id"    :   $(this).val(),
                "title" : $("#title"+$(this).val()).text(),
                "body"  :  $("#body"+$(this).val()).text(),
                'content': $("#customFile"+$(this).val()).val(),
                "url" : "/news/update",
            };
            NewsControlFunction(url,data);
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
                "url":"/news/create",
            }
            NewsControlFunction(url,data);
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