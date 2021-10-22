<?php
session_start();
if (!isset($_SESSION["theme"])){
  $_SESSION["theme"]="main";
}
?>



<!DOCTYPE>
<!-- .css" id="theme-link"> -->
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
				<img src="img\logo2.png" class="logo2-img" ></img>
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
    </div>
  <div class="backButton">
     	<a href="#top"><img src="img\back.png" class="backButton img"></a>
					
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
         <script src="themes.js"></script>
	</body>
</html>