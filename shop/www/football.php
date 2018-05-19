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
<script type="text/javascript" src="jquery.cookie.js"></script>

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
$num = 4; // Здесь указываем сколько хотим выводить товаров.
    $page = (int)$_GET['page'];              
     
    $count = mysql_query("SELECT COUNT(*) FROM table_products WHERE visible = '1'",$link);
    $temp = mysql_fetch_array($count);
 
    If ($temp[0] > 0)
    {  
    $tempcount = $temp[0];
 
    // Находим общее число страниц
    $total = (($tempcount - 1) / $num) + 1;
    $total =  intval($total);
 
    $page = intval($page);
 
    if(empty($page) or $page < 0) $page = 1;  
        
    if($page > $total) $page = $total;
      
    // Вычисляем начиная с какого номера
    // следует выводить товары 
    $start = $page * $num - $num;
 
    $qury_start_num = " LIMIT $start, $num"; 
    }
// ------------------------------------------------------------------------------------------
	$result = mysql_query(" SELECT * FROM table_products WHERE visible='1' $qury_start_num", $link);
    if(mysql_num_rows($result)>0)
    {
    $row = mysql_fetch_array($result);
    do
    {
        if($row["image"]!="" && file_exists("./uploads_images/".$row["image"]))
    {
        $img_path = './uploads_images/'.$row["image"];
        $max_width = 200;
        $max_height = 200;
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
    
    echo '</ul>';
    
    if ($page != 1){ $pstr_prev = '<li><a class="pstr-prev" href="football.php?page='.($page - 1).'">&lt;</a></li>';}
if ($page != $total) $pstr_next = '<li><a class="pstr-next" href="football.php?page='.($page + 1).'">&gt;</a></li>';
            
    // Формируем ссылки со страницами
if($page - 5 > 0) $page5left = '<li><a href="football.php?page='.($page - 5).'">'.($page - 5).'</a></li>';
if($page - 4 > 0) $page4left = '<li><a href="football.php?page='.($page - 4).'">'.($page - 4).'</a></li>';
if($page - 3 > 0) $page3left = '<li><a href="football.php?page='.($page - 3).'">'.($page - 3).'</a></li>';
if($page - 2 > 0) $page2left = '<li><a href="football.php?page='.($page - 2).'">'.($page - 2).'</a></li>';
if($page - 1 > 0) $page1left = '<li><a href="football.php?page='.($page - 1).'">'.($page - 1).'</a></li>';
 
if($page + 5 <= $total) $page5right = '<li><a href="football.php?page='.($page + 5).'">'.($page + 5).'</a></li>';
if($page + 4 <= $total) $page4right = '<li><a href="football.php?page='.($page + 4).'">'.($page + 4).'</a></li>';
if($page + 3 <= $total) $page3right = '<li><a href="football.php?page='.($page + 3).'">'.($page + 3).'</a></li>';
if($page + 2 <= $total) $page2right = '<li><a href="football.php?page='.($page + 2).'">'.($page + 2).'</a></li>';
if($page + 1 <= $total) $page1right = '<li><a href="football.php?page='.($page + 1).'">'.($page + 1).'</a></li>';

if ($page+5 < $total)
{
    $strtotal = '<li><p class="nav-point">...</p></li><li><a href="football.php?page='.$total.'">'.$total.'</a></li>';
}else
{
    $strtotal = ""; 
}
 
if ($total > 1)
{
    echo '
    <div class="pstrnav">
    <ul>
    ';
    echo $pstr_prev.$page5left.$page4left.$page3left.$page2left.$page1left."<li><a class='pstr-active' href='football.php?page=".$page."'>".$page."</a></li>".$page1right.$page2right.$page3right.$page4right.$page5right.$strtotal.$pstr_next;
    echo '
    </ul>
    </div>
    ';
}
?>


<!-- Подключение папки include с нижним блоком -->
<?php
	include ("Z:/home/shop/www/include/block_footer.php");
?>
</div>

</body>
</html>