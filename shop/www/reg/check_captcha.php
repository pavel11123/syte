<?php // проверка каптчи
 
 if($_SERVER["REQUEST_METHOD"] == "POST") // проверка как обратились к файлу если через метод пост то разрешаем
{
    session_start();    // включение сессии
    if($_SESSION['img_captcha'] == strtolower($_POST['reg_captcha']))
    {
        echo 'true';
    } else { echo 'false'; }
}  
 
?>