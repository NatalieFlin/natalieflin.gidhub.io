<?php
session_start();
if (!isset($_SESSION["theme"])){
  $_SESSION["theme"]="main";
}
?>

<!DOCTYPE>

<html>
	<head>
	<link rel="stylesheet" href="master.css">
	<link rel="stylesheet" href="style.css">
  <!--  <link rel="stylesheet" href="main.css"> -->
    
    <link rel="stylesheet" href="<?php echo $_SESSION["theme"]?>
<!-- 	<link rel="stylesheet" href="main.css">
 -->	</head>
	<body>
    <div class="theme-button" id="theme-button">Сменить тему</div>
		<header>
			<a name="top"></a>
			<div class="logo">
				<img src="img\logo2.png" class="logo2-img" href="index.php"></img>
				<div class="lol">
					<p class="phone">+7 351 111 22 33</p>
					<p><a href="tel:+7 351 111 22 33"><img class="pbutton" src="img\pngwing.com.png" alt="Телефон"></a></p>
					<p class="call1" >Позвоните нам</p>
				</div>
		</header>
		<main class ="main">
			<article class="main_content">
			<!-- 	<p>lorem120</p> -->
			</article>
			
		</main>

        <ul id="navbar" class="navber_a">
        <li><a href="catalog.php">Каталог</a></li>
        <li><a href="index.php">Главная</a></li>
        <li><a href="models.php">Особенности моделей транспорта</a>
        </li>
        <li><a href="komanda.php">Команда</a>
        
        </li>
        <li><a href="oNas.php">О нас</a>
    
       </li>
      </ul>

	
    
	
    
    <div class="test">
    	<div class="aboutUs">
        <h2 id= "aboutShop">О магазине</h2>
    	<p>o Наш магазин работает с 2016 года. Мы представлены в таких городах как Екатеринбург, Москва и Челябинск и многие другие. В среднем мы отправляем по 15-20 заказов в день в разные города и регионы по всей России.</p>
    		<p>o Мы имеем свои сервисные центры и собственных мастеров, благодаря которым, выполняем гарантийные работы качественно и в срок. Так же вы можете обратиться к нам с любой проблемой. Мастера выполнят диагностику и выполнят ремонт.</p>
    </div>    
    </div>

    </div>
  <div class="backButton">
     	<a href="#top"><img src="img\back.png" class="backButton img"></a>
					
		 </div>

		<h2 id = "aboutUs">Наши преимущества</h2>
		  <!-- блок слайдера -->
  <div class="carousel-wrapper">
    <span id="item-1"></span>
    <span id="item-2"></span>
    <span id="item-3"></span>
	<span id="item-4"></span>
    <!-- 1й элемент слайдера -->

		<div class="carousel-item item-1">
		  <p>Мы обслуживаем одинаково качественно как своих гарантийных клиентов, так и сторонние заказы.</p>
		  <a class="arrow arrow-prev" href="#item-4"></a>
		  <a class="arrow arrow-next" href="#item-2"></a>
		</div>
		<!-- 2й элемент слайдера -->
		<div class="carousel-item item-2">
		  <p>Если деталь сломалась — в нашем центре ее не будут ремонтировать, а сразу заменят на новую.</p>
		  <a class="arrow arrow-prev" href="#item-1"></a>
		  <a class="arrow arrow-next" href="#item-3"></a>
		</div>
		<!-- 3й элемент слайдера -->
		<div class="carousel-item item-3">
		  <p>Мы работаем с крупной сетью сервисных центров, ее филиалы находятся в 70 городах России.</p>
		  <a class="arrow arrow-prev" href="#item-2"></a>
		  <a class="arrow arrow-next" href="#item-4"></a>
		</div>
		<!-- 4й элемент слайдера -->
		<div class="carousel-item item-4">
		  <p>Гарантия действует в течении 3 лет!</p>
		  <a class="arrow arrow-prev" href="#item-3"></a>
		  <a class="arrow arrow-next" href="#item-1"></a>
  </div>
  </div>

  <h2 id= "aboutShop">Наши консульнтанты</h2>
  <div class="team">
    <div class="consultants">
    	<div>
				<img src="img\resourses\Гоблин.png" class="consultants img">
				<p>o Иванов Иван Иванович – квалифицированный специалист сервисного центра My Gyro.</p>
				</div>
				<div>
				<img src="img\resourses\Гоблин2.png" class="consultants img">
				<p>o Пупкин Василий Васильевич – старший консультант My Gyro.</p>
				</div>
				<div>
				<img src="img\resourses\Гоблин3.jpg" class="consultants img">
				<p>o Захаров Андрей Борисович – менеджер-консультант My Gyro.</p>
				</div>
				</div>
    </div>
         <script src="themes.js"></script>
	</body>
</html>
