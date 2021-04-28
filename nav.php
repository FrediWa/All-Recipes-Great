<?php
$dir_level = "";
if(isset($current_page)){
    $dir_level = ( $current_page == "home" ? "./" : "../");
}
?>
<link rel="stylesheet" href="<?php echo $dir_level?>css/master.css">
<nav id="toolbar" class="<?php echo $current_page?>">
<div class="nav-container" id="navigation">

<ul class="nav-menu">
    <li class="<?php if(isset($page1)): echo'link-active'; endif?>">
      <a href="<?php echo $dir_level?>">Home</a>
    </li>
    <li class="<?php if(isset($page2)): echo'link-active'; endif?>">
      <a href="<?php echo $dir_level?>recipes">Recipes</a>
    </li>
    <li class="<?php if(isset($page3)): echo'link-active'; endif?>">
      <a href="<?php echo $dir_level?>diets">Diets</a>
    </li>
    <li class="<?php if(isset($page4)): echo'link-active'; endif?>">
      <a href="<?php echo $dir_level?>courses">Courses</a>
    </li>

</ul>
</div>

</nav>

<script type="text/javascript">

</script>
