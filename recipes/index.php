<?php include "../head.php"?>
<?php include "../init.php"?>
<?php
$recipe_header;
$conn = new mysqli($servername, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_GET['diet']) && $_GET['diet'] != ""){

  $diet = 0;
  if($_GET['diet'] == "pescatarian"){
    $recipe_header = "Pescatarian";
    $diet = 1;
  }
  if($_GET['diet'] == "vegetarian"){
    $recipe_header = "Vegetarian";
    $diet = 2;
  }
  if($_GET['diet'] == "vegan"){
    $recipe_header = "Vegan";
    $diet = 3;
  }
  $sql = "SELECT id, name, img_path FROM recipes WHERE diet=$diet";
}else if(isset($_GET['course']) && $_GET['course'] != ""){
  $course = 0;
  if($_GET['course'] == "starter"){
    $recipe_header = "Starters";
    $course = 1;
  }
  if($_GET['course'] == "main"){
    $recipe_header = "Mains";
    $course = 2;
  }
  if($_GET['course'] == "dessert"){
    $recipe_header = "Desserts";
    $course = 3;
  }
  $sql = "SELECT id, name, img_path FROM recipes WHERE course=$course";
}else{
    $sql = "SELECT id, name, img_path FROM recipes";
    $recipe_header = "All recipes";
}

$add_dir_level=true;
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Recipes | ARG</title>
</head>
<body>
<?php $page2=true; $current_page="other"; include "../nav.php"?>
<div class="container recipe">
<h1 class="page-title"><?php echo $recipe_header?></h1>
  <div id="content-wrapper" class="recipes-wrapper">
    <?php if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        ?>
        <a href="./recipe.php?recipe=<?php echo $row['id']?>" class="recipe" style="background-image: url('../img/<?php echo $row['img_path']?>')">
          <p><?php echo $row['name'];?></p>
        </a>
        <?php
      }
    } else {
      echo "<p class='no-recipes'>Sorry, no recipes for these preferences</p>";
    }?>
  </div>

</div>

</body>
<?php include "../footer.php"?>
</html>
<script type="text/javascript">
const content = document.getElementById("content-wrapper");
  if(content.offsetHeight < window.innerHeight*0.6){
    document.getElementById("footer").classList.add("sticky-footer");
  }else{
    document.getElementById("footer").classList.remove("sticky-footer");
  }
</script>
<?php $conn->close();?>
