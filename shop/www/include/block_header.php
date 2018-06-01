<!-- Создание верхнего блока -->
<div id = "block_header">


<!-- Создание кнопки Вход  -->
<p id="reg-auth-title"><a class="top-auth">Вход</a><a href="registration.php">Регистрация</a></p>

<div id="block-top-auth"> 
<form method="post"> 
<ul id="input-email-pass">
<h3>Вход</h3>
<p id="message_auth"> Неверный логин или пароль</p>
<li><center><input type="text" id="auth_login" placeholder="Логин или E-mail" /></center></li>
<li><center><input type="password" id="auth_pass" placeholder="Пароль" /><span id="button-pass-show-hide" class="pass-show"></span></center></li>
 <ul id="list-auth">
<li><input type="checkbox" name="rememberme" id="rememberme" /><label for="rememberme">Запомнить меня</label></li>
<li><a id="remindpass" href="#">Забыли пароль?</a></li>
<p align="right" id="button-auth" ><a>Вход</a></p>
<p align="right" class="auth-loading"><img src="/images/loading.gif" /></p>
</ul>
</form>
<div id="block-remind">
<h3>Восстановление<br /> пароля</h3>
<p id="message-remind" class="message-remind-success" ></p>
<center><input type="text" id="remind-email" placeholder="Ваш E-mail" /></center>
<p align="right" id="button-remind" ><a>Готово</a></p>
<p align="right" class="auth-loading" ><img src="/images/loading.gif" /></p>
<p id="prev-auth">Назад</p>
</div>
</div>

<!-- Создание логотипа -->
<img id="logotip" src="/images/12198418_b-jThJmVdmD6Y998HZmL6fCJFRSIzxuuWR37iRLL0dc.png"/>
<p id="logotip"><a href="index.php"></a></p>

<!-- Создание ссылок в меню-->
<ul id="block_menu">
<li><a href="football.php">Футбол</a></li>
<li><a href="Basketbal.php">Баскетбол</a></li>
<li><a href="Voleybal.php">Волейбол</a></li>
<li><a href="Tennis.php">Теннис</a></li>
<li><a href="Hockey.php">Хоккей</a></li>
<li><a href="Athletic.php">Легкая атлетика</a></li>
<li><a href="Novinki.php">Новинки</a></li>
<li><a href="Sale.php">Акции</a></li>
</ul>



</div>

