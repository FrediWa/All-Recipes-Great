
<!DOCTYPE html>
<html lang="en">
<head>
<?php include "./head.php"?>
<?php include "./init.php"?>
<title>Search | ARG</title>
</head>
<body>
<header style="padding-bottom: 30px;background-color:#EC7600;">
  <?php $current_page="home"; $page1=true; include "./nav.php"?>
  <form style="padding:10px; padding-top: 100px;" action="search.php" method="get">
    <div class="search">
      <input type="text" placeholder="Search for recipes here" name="query" value="<?php echo $_GET['query']?>">
      <button><img src="./img/search.png" alt=""></button>
    </div>
  </form>
</header>
<img src="./img/wave.svg" alt="">
<div class="container">
  <p>(Sök funktionen fungerar inte, det kommer alltid samma saker, jag anser att det är utanför kursens tekniska krav men så här KUNDE sök sidan se ut)</p>
  <p style="margin-top: 50px;">Showing results for <span style="font-weight:bold;"><?php echo $_GET['query']?></span>:</p>
  <div class="recipes-wrapper" style="margin-top: 20px;">
            <a href="./recipe.php?recipe=1" class="recipe" style="background-image: url('./img/sallad.jpg')">
          <p><span>Greenpea sallad</span>
with roasted cashews and parmesan</p>
        </a>
                <a href="./recipe.php?recipe=2" class="recipe" style="background-image: url('./img/pumpkinsoup.jpg')">
          <p><span>Pumpkin soup</span>
with creme fraiche and sunflower seeds</p>
        </a>
                <a href="./recipe.php?recipe=3" class="recipe" style="background-image: url('./img/risotto.jpg')">
          <p><span>Risotto</span>
with mushrooms and parsley</p>
        </a>
                <a href="./recipe.php?recipe=4" class="recipe" style="background-image: url('./img/apricot.jpg')">
          <p><span>Confit Apricot</span>
with dried red shiso</p>
        </a>
                <a href="./recipe.php?recipe=5" class="recipe" style="background-image: url('./img/applepie.jpg')">
          <p><span>Apple pie</span>
with ginger and cardamon</p>
        </a>
          </div>
</div>
</body>
<?php include "./footer.php"?>
</html>
