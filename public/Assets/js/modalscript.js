$( document ).ready(function() {
    $("#modal_confirm").click(
		function(){ 
            modalAjax('result', 'modal_form', '/show');
			return false; 
		}
    );
});

function modalAjax(result_form, ajax_form, url) {
    $.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
            if(response=="Сheck the entered data"){
                $('#error').html('Сheck the entered data');
            }
            else{
                $('#result').html(response);
                $("#modal_confirm").addClass("d-none");
            }
        	
    	},
    	error: function(response) { // Данные не отправлены
            $('#error').html('Error!');
    	}
 	});
}
