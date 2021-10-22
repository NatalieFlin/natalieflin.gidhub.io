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
	<title>Магазин</title>				    
	</head>
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

      <section class="author-archive">
  <div class="container">
    <h1>Some of my <a href="https://tutsplus.com/authors/george-martsoukos" target="_blank">Tuts+ Tutorials</a></h1>
    <input type="radio" id="All" name="categories" value="All" checked>
    <input type="radio" id="Sigvey" name="categories" value="Sigvey">
    <input type="radio" id="Samokat" name="categories" value="Samokat">
    <input type="radio" id="Giro" name="categories" value="Giro">
<!--     <input type="radio" id="WordPress" name="categories" value="WordPress">
    <input type="radio" id="Slider" name="categories" value="Slider">
    <input type="radio" id="fullPage.js" name="categories" value="fullPage.js"> -->


    <ol class="filters">
      <li>
        <label for="All">Все</label>
      </li>
      <li>
        <label for="Sigvey">Сигвеи</label>
      </li>
      <li>
        <label for="Samokat">Самокаты</label>
      </li>
      <li>
        <label for="Giro">Гироскутеры</label>
      </li>
    </ol>

    <ol class="posts">
          <div class="productsNum">
      <li class="post" data-category="Samokat">
        <article>
          <figure>
            <a href="" target="_blank">
              <img src="img\tov7.jpg" class="products">
            </a>
           <figcaption>

              <ol class="post-categories">
               <h3 class="lol4">KUGOO S2 (Jilong)</h3>

        <p class="lolp">Электросамокат</p>
          <h2 class="lolh2">14900 руб.</h2>
              </ol>
            </figcaption>
          </figure>
        </article>
      </li>
    </div>
      <div class="productsNum">
      <li class="post" data-category="Samokat">
        <article>
          <figure>
            <a href="" target="_blank">
              <img src="img\tov7.jpg" alt="" class="products">
            </a>
            <figcaption>

              <ol class="post-categories">
               <h3 class="lol4">KUGOO S2 (Jilong)</h3>

        <p class="lolp">Электросамокат</p>
          <h2 class="lolh2">14900 руб.</h2>
              </ol>
            </figcaption>
          </figure>
        </article>
      </li>
        </div>

        <div class="productsNum">
      <li class="post" data-category="Sigvey">
        <article>
          <figure>
            <a href="" target="_blank">
              <img src="img\tov4.jpg" alt="" class="products">
            </a>
          <figcaption>

              <ol class="post-categories">
               <h3 class="lol4">KUGOO S2 (Jilong)</h3>

        <p class="lolp">Электросамокат</p>
          <h2 class="lolh2">14900 руб.</h2>
              </ol>
            </figcaption>
          </figure>
        </article>
      </li>
       </div>

           <div class="productsNum">
      <li class="post" data-category="Giro">
        <article>
          <figure>
             <a href="" target="_blank">
              <img src="img\tov2.jpg" alt="" class="products">
            </a>
        <figcaption>

              <ol class="post-categories">
               <h3 class="lol4">KUGOO S2 (Jilong)</h3>

        <p class="lolp">Электросамокат</p>
          <h2 class="lolh2">14900 руб.</h2>
              </ol>
            </figcaption>
          </figure>
        </article>
      </li>
    </div>


           <div class="productsNum">
      <li class="post" data-category="Giro">
        <article>
          <figure>
             <a href="" target="_blank">
              <img src="img\tov2.jpg" alt="" class="products">
            </a>
        <figcaption>

              <ol class="post-categories">
               <h3 class="lol4">KUGOO S2 (Jilong)</h3>

        <p class="lolp">Электросамокат</p>
          <h2 class="lolh2">14900 руб.</h2>
              </ol>
            </figcaption>
          </figure>
        </article>
      </li>
    </div>

           <div class="productsNum">
      <li class="post" data-category="Giro">
        <article>
          <figure>
             <a href="" target="_blank">
              <img src="img\tov2.jpg" alt="" class="products">
            </a>
        <figcaption>

              <ol class="post-categories">
               <h3 class="lol4">KUGOO S2 (Jilong)</h3>

        <p class="lolp">Электросамокат</p>
          <h2 class="lolh2">14900 руб.</h2>
              </ol>
            </figcaption>
          </figure>
        </article>
      </li>
    </div>


           <div class="productsNum">
      <li class="post" data-category="Giro">
        <article>
          <figure>
             <a href="" target="_blank">
              <img src="img\tov2.jpg" alt="" class="products">
            </a>
        <figcaption>
              <ol class="post-categories">
               <h3 class="lol4">KUGOO S2 (Jilong)</h3>
        <p class="lolp">Электросамокат</p>
          <h2 class="lolh2">14900 руб.</h2>
              </ol>
            </figcaption>
          </figure>
        </article>
      </li>
       </div>
       </div>

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