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
 -->	
	<title>Каталог</title>				      
	</head>
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
		<div class="wrapper">
			<div class="content">
				<h3>Особенности моделей транспорта</h3>
				<div class="infoBlocks"  id ="el">
				<img src="img\elsam.png" class="content img">
        <div>
          <h1>Электросамокат</h1>
          <p>Электросамокат - современный вариант простого самоката. Для того чтобы на нем кататься, нужно всего один раз оттолкнуться ногой от земли, обеспечив стартовое ускорение. Дальше устройство будет везти хозяина самостоятельно за счет встроенного электромотора. Если выбирать между моноколесом или электросамокатом, последний будет гораздо безопаснее в эксплуатации за счет наличия 2 колес (т.е. 2 точек опоры) и ручки для опоры руками.</p>
        </div>
				</div>
				<div class="infoBlocks"  id ="giro">
				<img src="img\gyro.png" class="content img">
        <div>
          <h1>Гироскутер</h1>
        <p>Гироскутер представляет собой конструкцию из 2 колес, расположенных по бокам от наездника и соединенных поперечной планкой-корпусом. Внутри корпуса располагаются электродвигатели, аккумуляторные батареи и гироскопы, поддерживающие в горизонтальном положении площадку для ног.

  Гироскутеры никогда не оснащаются рукоятками для рук. Устройства из 2 колес, поперечной площадки и рулевого столба называются сигвеями и управляются манипуляциями руками.

  Особенность управления гироскутером состоит в том, что для движения вперед наезднику необходимо наклониться вперед. Для торможения или движения назад - наклониться назад. Для поворота нужно наклонять корпус в правую или левую сторону.</p>
        </div>
				
				
	</div>
				<div class="infoBlocks" id ="sig">
				<img src="img\seegway.png" class="content img">
        <div>
          <h1>Сигвей</h1>
          <p>Гироскутер представляет собой конструкцию из 2 колес, расположенных по бокам от наездника и соединенных поперечной планкой-корпусом. Внутри корпуса располагаются электродвигатели, аккумуляторные батареи и гироскопы, поддерживающие в горизонтальном положении площадку для ног.

Гироскутеры никогда не оснащаются рукоятками для рук. Устройства из 2 колес, поперечной площадки и рулевого столба называются сигвеями и управляются манипуляциями руками.

Особенность управления гироскутером состоит в том, что для движения вперед наезднику необходимо наклониться вперед. Для торможения или движения назад - наклониться назад. Для поворота нужно наклонять корпус в правую или левую сторону.</p>
        </div>
</div>
			</div>
         <script src="themes.js"></script>
	</body>
</html>
