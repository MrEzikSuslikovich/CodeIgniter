$( document ).ready(function() {
    $("#modal_confirm").click(
		function(){
            var phone=$("#phoneinput").val();
            if($("#nameinput").val()=="" || phone=="" || phone.length<17){
                $('#error').html('Сheck the entered data');
            } 
            else{
                modalAjax('result', 'modal_form', '/StartTrialSend');
            }
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
            $('#result').html(response);
            $("#modal_confirm").addClass("d-none");
    	},
    	error: function(response) { // Данные не отправлены
            $('#error').html('Error!');
    	}
 	});
}
