$(document).ready(function(){
     $('#genpass').click(function(){
 $.ajax({
  type: "POST", // ����� ��������
  url: "/functions/genpass.php", // ���� ����������
  dataType: "html",
  cache: false, // ����� ������� �� ��������� ������ 
  success: function(data) { // �������� ������ �����������
  $('#reg_pass').val(data);
  }
});
  
});
  
  // ��� ���������� ������
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