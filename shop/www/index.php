<?php
	include("include/db_connect.php");
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="shop-script.js"></script>

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

<ul id="block_tovar_grid">
<?php
	$result = mysql_query(" SELECT * FROM table_products", $link);
    if(mysql_num_rows($result)>0)
    {
    $row = mysql_fetch_array($result);
    do
    {
        if($row["image"]!=" " && file_exists("./uploads_images/".$row["image"]))
    {
        $img_path = './uploads_images/'.$row["image"];
        $max_width = 400;
        $max_height = 250;
        list($width, $height)= getimagesize($img_path);
        $ratioh = $max_height/$height;
        $ratiow = $max_width/$width;
        $ratio = min ($ratioh,$ratiow);
        $width = intval($ratio*$width);
        $height = intval($ratio*$height);
    }else
    {
        $img_path = "/images/no-image.png";
        $width = 110;
        $height = 200;
    }
        
        echo'
        <li>
        <div class = "block-images-grid" >
        <img src = "'.$img_path.'" width="'.$width.'" height="'.$height.'"/>
        </div>
        <p class = "style-title-grid"><a href="">'.$row["title"].'</a></p>
        <a class = "add-cart-style-grid></a>
        <p class = "style-price-grid"><strong>'.$row["price"].'</strong> руб.</p>
        <div class = "mini_features">
        '.$row["mini_features"].'
        </div>
        </li>
        ';
    }
    while ($row = mysql_fetch_array($result));
    }
?>
</ul>

<!-- Подключение папки include с нижним блоком -->
<?php
	include ("Z:/home/shop/www/include/block_footer.php");
?>
</div>

</body>
</html>