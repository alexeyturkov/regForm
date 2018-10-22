$( document ).ready(function() {
    $("#btn").click(
		function(){
			sendAjaxForm('result_form', 'ajax_form', 'obr.php');
			return false; 
		}
	);
});

function change(idName) {
     if(document.getElementById(idName).style.display=='none') {
    document.getElementById(idName).style.display = 'block';
  } else {
    (document.getElementById(idName).style.display=='none')
  }

  return false;
}



function sendAjaxForm(result_form, ajax_form, url) {
    jQuery.ajax({
        url:    "obr.php", 
        type:     "POST", 
        dataType: "html", 
        data: jQuery("#"+ajax_form).serialize(),  
        success: function(response) { 

          change('result_form');
            result = jQuery.parseJSON(response);
            $('#result_form').empty();

            if (result.status=="success") {

               document.getElementById(ajax_form).style.display = "none";
                
               document.getElementById(result_form).innerHTML = result.msg;
                  change('qwe');

                       

                
            } else {

                document.getElementById(result_form).innerHTML = result.msg;
              
                
            }
 
           
             
        },
        error: function(response) { 
            document.getElementById(result_form).innerHTML = "Ошибка. Данные не отправленны.";
        }
     
    });
}

 
    

 




