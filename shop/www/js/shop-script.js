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
  
  // для обновления каптчи
  $('#reloadcaptcha').click(function(){
$('#block-captcha > img').attr("src","/reg/reg_captcha.php?r="+ Math.random());
  
$('.top-auth').toggle(
       function() {
           $(".top-auth").attr("id","active-button");
           $("#block-top-auth").fadeIn(200);
       },
       function() {
           $(".top-auth").attr("id","");
           $("#block-top-auth").fadeOut(200);  
       }
    );
  
}); 
});