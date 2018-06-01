<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{  // проверка как обратились к этому файлу
define('db_shop', true);    
	include ("Z:/home/shop/www/include/db_connect.php");
include("Z:/home/shop/www/functions/functions.php");
 
$login = clear_string($_POST['reg_login']);
 
$result = mysql_query("SELECT login FROM 'reg_user' WHERE login = '$login'",$link); // отправляем запрос в бд
If (mysql_num_rows($result) > 0) // если в таблице есть такой логин
{
   echo 'false';
}
else
{
   echo 'true'; 
}
}

?>