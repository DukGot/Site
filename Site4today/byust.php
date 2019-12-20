<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="byust.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Бюстгальтери</title>
</head>
<body>
	<header>
		<a href="BestOnYou.html" class="BestOnYou">BestOnYou</a>
		<div class="menu">
			<ul>
				<li><a href="newspaper.html"><i class="newspaper"></i>Новини</a></li>
				<li><a href="#"><i class="shopping-bag"></i>Каталог</a>
					<ul>
						<li><a href="Комплекти.html">Комплекти</a></li>
						<li><a href="#">Б'юсти</a></li>
							<ul>
								<li><a href="#">Push up</a></li>
								<li><a href="#">Великі розміри</a></li>
							</ul>
					<li><a href="#">Піжами</a></li>
					<li><a href="#">Труси</a></li>
					</ul>
				</li>
				<li><a href="#"><i class="sell"></i>Акції</a></li>
				<li><a href="#"><i class="handshake"></i>Умови співпраці</a></li>
				<li><a href="#"><i class="envelope"></i>Контакти</a></li>
			</ul>
		</div>
	</header>
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
	        <h1>Бюсгалтери</h1>	
	            <img src="<?php echo $var['img']; ?>" class="image">
	            <p class="name"><?php echo $var['name']; ?></p>
	            <p class="title"><?php echo $var['title']; ?></p>
	            <div class="buy">
	                <p class="price"><?php echo $var['price']; ?> грн</p>
	                <button class="buy_button">Buy</button>
	            </div>
				<?php endforeach; ?>
			</div>
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