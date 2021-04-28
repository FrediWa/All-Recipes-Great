<!DOCTYPE html>
<html lang="en">
<head>
<?php include "head.php"?>
<?php include "init.php"?>
<title>Home | ARG</title>
</head>
<body>
  <style media="screen">

  </style>
<?php $page1=true; $current_page="home"; include "nav.php"?>
<header class="frontpage">
  <div class="header-gradient-overlay">
    <h1>Welcome to AllRecipesGreat</h1>
    <form class="" action="search.php" method="get">
      <div class="search">
        <input type="text" placeholder="Search for recipes here" name="query" value="">
        <button><img src="./img/search.png" alt=""></button>
      </div>
    </form>
    <div class="header-social">
      <p>Follow us on social media!</p>
      <a href=""><img src="<?php echo $addition_dir_level?>./img/facebook.png" alt=""></a>
      <a href=""><img src="<?php echo $addition_dir_level?>./img/instagram.png" alt=""></a>
      <a href=""><img src="<?php echo $addition_dir_level?>./img/pinterest.png" alt=""></a>
    </div>
  </div>
</header>
<img src="./img/wave.svg" alt="">
  <section>
    <div class="container">
      <h2>Fall themed</h2>
      <div class="featured-content">

      <div class="col">
        <a href="./recipes/recipe.php?recipe=5" class="featured-big recipe-std" style="background-image: url('./img/applepie.jpg'); background-size:cover;">
          <h3>Apple Pie</h3>
        </a>
      </div>
      <div class="col">
        <a href="./recipes/recipe.php?recipe=2" class="featured-small recipe-std" style="background-image: url('./img/pumpkinsoup.jpg'); background-size:cover;">
          <img src="" alt="">
          <h3>Pumpkin soup</h3>
        </a>
        <a href="./recipes/recipe.php?recipe=3" class="featured-small recipe-std" style="background-image: url('./img/risotto.jpg'); background-size:cover;">
          <h3>Mushroom Risotto</h3>
        </a>
      </div>
    </div>
  </div>
  </section>

  <section class="frontpage-courses">
    <div class="container">
      <h2>Find recipes based on course</h2>
      <div class="frontpage-box-triplet">
      <a href="./recipes/?course=starter">
        <div class="image-square" style="background-image: url('./img/mozz.jpg'); background-size:cover; background-position:center"></div>
        <p>Starters</p>
      </a>
      <a href="./recipes/?course=main">
        <div class="image-square" style="background-image: url('./img/meat.jpg'); background-size:cover; background-position:center"></div>
        <p>Mains</p>
      </a>
      <a href="./recipes/?course=dessert">
        <div class="image-square" style="background-image: url('./img/apricot.jpg'); background-size:cover; background-position:center"></div>
        <p>Desserts</p>
      </a>


      </div>
    </div>
  </section>
  <svg class="wave-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 612 47.23" preserveAspectRatio="none" style="enable-background:new 0 0 612 47.23;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#282828;}
</style>
<path class="st0" d="M0,0v47.23c0,0,64.81-38.65,170.86-41.7c106.05-3.05,187.68,39.29,306.5,33.99
	C603.73,33.88,612,13.71,612,13.71V0H0z"/>
</svg>

  <section class="frontpage-diets">
    <div class="container">
      <h2>Find recipes based on diet</h2>
      <div class="frontpage-box-triplet">
      <a href="./recipes/?diet=pescatarian">
        <div class="image-square" style="background-image: url('./img/fish.jpg'); background-size:cover; background-position:center"></div>
        <p>Pescatarian</p>
      </a>
      <a href="./recipes/?diet=vegetarian">
        <div class="image-square" style="background-image: url('./img/sallad.jpg'); background-size:cover; background-position:center"></div>
        <p>Vegetarian</p>
      </a>
      <a href="./recipes/?diet=vegan">
        <div class="image-square" style="background-image: url('./img/pumpkinsoup.jpg'); background-size:cover; background-position:center"></div>
        <p>Vegan</p>
      </a>


      </div>
    </div>
  </section>
  <?php include "./footer.php"?>
</body>
</html>
