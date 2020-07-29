$( document ).ready(function() {
    $("#modal_confirm").click(
		function(){ 
            modalAjax('result', 'modal_form', '/Assets/php/modal_controler.php');
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
        	$('#result').html("Success!");
    	},
    	error: function(response) { // Данные не отправлены
            $('#result').html('Ошибка. Данные не отправлены.');
    	}
 	});
}