$( document ).ready(function() {
    $("#modal_confirm").click(
		function(){
            if($("#nameinput").val()=="" || ($("#phoneinput").val()).length<17){
                $('#error').html('Сheck the entered data');
            } 
            else{
                modalAjax('modal_form', '/Send');
            }
            return false;        
		}
    );
});

function modalAjax(ajax_form, url) {
    $.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        headers: {'X-Requested-With': 'XMLHttpRequest'},
        dataType: "html", //формат данных
        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
            $('#result').html(response);
            $("#modal_confirm").addClass("d-none");
    	},
    	error: function(response) { // Данные не отправлены
            $('#error').html('Error!');
    	}
 	});
}
