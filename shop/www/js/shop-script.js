$(document).ready(function(){
     $('#genpass').click(function(){
 $.ajax({
  type: "POST", // метод передачи
  url: "/functions/genpass.php", // куда передавать
  dataType: "html",
  cache: false, // чтобы браузер не кэшировал данные 
  success: function(data) { // проверка ответа обработчика
  $('#reg_pass').val(data);
  }
});
  
}); 
});