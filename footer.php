<footer id="footer"><?php
  if(isset($add_dir_level)){
    $addition_dir_level=".";
  }else{
    $addition_dir_level="";
  }
?>
  <div class="footer-nav">
    <p class="footer-nav-label">Site navigation</p>
    <ul class="footer-nav-menu">
        <li>
          <a href="<?php echo $dir_level?>">Home</a>
        </li>
        <li>
          <a href="<?php echo $dir_level?>recipes">Recipes</a>
        </li>
        <li>
          <a href="<?php echo $dir_level?>diets">Diets</a>
        </li>
        <li>
          <a href="<?php echo $dir_level?>courses">Courses</a>
        </li>

    </ul>
  </div>
  <div class="container">
    <hr>
  </div>
  <div class="footer-social">
    <p>Follow us on social media!</p>
    <a href=""><img src="<?php echo $addition_dir_level?>./img/facebook.png" alt=""></a>
    <a href=""><img src="<?php echo $addition_dir_level?>./img/instagram.png" alt=""></a>
    <a href=""><img src="<?php echo $addition_dir_level?>./img/pinterest.png" alt=""></a>
  </div>
  <div class="container">
    <hr>
  </div>
  <p>Copyright AllRecipesGreat 2020</p>
</footer>
