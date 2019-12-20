<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="byustgalter.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <title></title>
</head>
<body>
<header>
        <a href="BestOnYou.html" class="BestOnYou">BestOnYou</a>
        <a href="" class="fas fa-shopping-bag"></a>
        <div class="menu">
            <ul>
                <li><a href="newspaper.html"><i class="newspaper"></i>Новини</a></li>
                <li><a href="#"><i class="shopping-bag"></i>Каталог</a>
                    <ul>
                        <li><a href="Комплекти.html">Комплекти</a></li>
                        <li><a href="#">Бюстгальтери</a></li>
                    <li><a href="#">Нічна білизна</a></li>
                    <li><a href="trusiki.php">Трусики</a></li>
                    </ul>
                </li>
                <li><a href="#"><i class="sell"></i>Акції</a></li>
                <li><a href="#"><i class="handshake"></i>Умови співпраці</a></li>
                <li><a href="#"><i class="envelope"></i>Контакти</a></li>
            </ul>
        </div>
    </header>
<h1>Бюстгальтери</h1>
<div class="content">
<?php 
    require_once("db.php");
    $link=db_content();
    $query="SELECT * FROM goods ORDER BY id ASC";
    $result = mysqli_query($link, $query);
    $n=mysqli_num_rows($result);
    $array=array();
    for($i = 0; $i < $n; $i++)
            {
                $row = mysqli_fetch_assoc($result);
                $array[] = $row;
            }

     ?>
        <?php foreach($array as $var):  ?>
    <!-- FOREACH -->
   
    <div class="block">
        
        <img src="<?php echo $var['img']; ?>" class="image">
        <p class="name"><?php echo $var['name']; ?></p>
        <p class="title"><?php echo $var['title']; ?></p>
        <div class="buy">
            <p class="price"><?php echo $var['price']; ?> грн</p>
            <button class="buy_button">Buy</button>
        </div>
    </div>
    <?php endforeach; ?>
</div>    
<footer class="footer">
    <div class="footer-data">Пн-Пт | 10:00 - 19:00 <br> Сб-Нд | 11:00 - 19:00</div>
    <ul class="social">
        <li>
            <a href="https://www.facebook.com/" class="fab fa-facebook-square"></a>
        </li>
        <li>
            <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
        </li>
        <li>
            <a href="https://twitter.com/" class="fab fa-twitter-square"></a>
        </li>
    </ul>
    <div class="footer"></div>
</footer>
</body>
</html>