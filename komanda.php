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
				<img src="img\logo2.png" class="logo2-img"></img>
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

			<div class="information">
          <h2 id = "aboutUs">Команда</h2>
        <img src="img\group.png" class="content img">
        <div>
      <p>o Чтобы работать в наших магазинах нужно знать каждую модель, её плюсы и минусы и уметь ездить на ней. Да, это долго, и кто-то скажет, что неэффективно. Но так мы гарантированно получаем сотрудника, который разбирается в каждом товаре и сможет по-настоящему помочь покупателю, а не “впихнуть” ему, что-нибудь подороже.</p>
      </div>
      </div>
         <script src="themes.js"></script>
	</body>
</html>
