<!DOCTYPE html>
<html lang="en">
<head>
<?php include "../head.php"?>
<?php include "../init.php"?>
<title>Courses | ARG</title>
</head>
<body>
<?php $page4=true; $current_page="other";$add_dir_level=true; include "../nav.php"?>
<div class="container">
<h1 class="page-title">Select a course</h1>
<div class="recipes-wrapper">
  <a href="../recipes/?course=starter" style="background-image: url('../img/shrimp.jpg')" class="recipe-dc">

<p>Starter</p>
</a>
      <a href="../recipes/?course=main" style="background-image: url('../img/meat.jpg')" class="recipe-dc">

<p>Main</p>
</a>
              <a href="../recipes/?course=dessert" style="background-image: url('../img/applepie.jpg')" class="recipe-dc">

        <p>Dessert</p>
      </a>

        </div>
</div>
</div>
</body>
<?php include "../footer.php"?>
</html>
