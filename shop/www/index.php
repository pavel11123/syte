<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/reset.css" rel="stylesheet" type="text/css" />

	<title>Sport House</title>
</head>

<body>

<!-- Основной блок -->
<div id="block_body"> 
<!-- Подключение папки include с верхним блоком -->
<?php
	include ("Z:/home/shop/www/include/block_header.php");
?>

<!-- Создание поиска -->
<div id="block_search">
<form method = "GET" action = "search.php?q=">
<input type="text" id="input_search" name="q" placeholder="Поиск среди товаров" /> <!-- Не отображается надпись -->
<input type="submit" id="button_search" value="Поиск" />
</form>

</div>

<!-- Создание блоков для фотографий -->
<div> Новый блок </div>
<div id="block_image"></div>
<div id="block_image1"></div>
<div id="block_image2"></div>
<div> Спорт </div>
<div id="block_image3"></div>
<div id="block_image4"></div>
<div id="block_image5"></div>
<div id="block_image6"></div>
<div> Для всех</div>
<div id="block_image7"></div>
<div id="block_image8"></div>
<div id="block_image9"></div>

<!-- Подключение папки include с нижним блоком -->
<?php
	include ("Z:/home/shop/www/include/block_footer.php");
?>
</div>

</body>
</html>