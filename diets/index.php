<!DOCTYPE html>
<html lang="en">
<head>
<?php include "../head.php"?>
<?php include "../init.php"?>
<title>Courses | ARG</title>
</head>
<body>
<?php $page3=true; $current_page="other";$add_dir_level=true;include "../nav.php"?>
<div class="container">
<h1 class="page-title">Select a diet</h1>
<div class="recipes-wrapper">
  <a href="../recipes/?diet=pescatarian" style="background-image: url('../img/fish.jpg')" class="recipe-dc">

<p>Pescatarian</p>
</a>
      <a href="../recipes/?diet=vegetarian" style="background-image: url('../img/mozz.jpg')" class="recipe-dc">

<p>Vegetarian</p>
</a>
              <a href="../recipes/?diet=vegan" style="background-image: url('../img/risotto.jpg')" class="recipe-dc">

        <p>Vegan</p>
      </a>

        </div>
</div>
</div>
</body>
<?php include "../footer.php"?>
</html>
