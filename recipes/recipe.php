<?php include "../head.php"?>
<?php include "../init.php"?>
<?php
$add_dir_level=true;
$conn = new mysqli($servername, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id;
if(isset($_GET['recipe']) && $_GET['recipe'] != ""){
  $id = (intval($_GET['recipe']));
}
$sql = "SELECT * FROM recipes WHERE id=$id";
$result = $conn->query($sql);
$data;
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $data=$row;
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title></title>
</head>
<body>
<?php $page2=true; $current_page="other"; include "../nav.php"?>

<div class="container">
<header class="recipe-header">
  <div class="recipe-info">
    <?php?>
    <h1 id="recipe-title"><?php echo $data['name']?></h1>
    <?php echo $data['specs']?>
  </div>
  <div class="recipe-img"style="background-image: url('../img/<?php echo $data['img_path']?>')"></div>
</header>
<section class="recipe-instructions">
  <div class="ingredients">
      <h2>Ingredients</h2>
      <ul>
        <?php echo $data['ingredients']?>
      </ul>
  </div>
  <div class="method">
    <h2>Method</h2>
    <?php echo $data['method']?>
  </div>
</section>
</div>


</body>
<?php include "../footer.php"?>
<script type="text/javascript">
  document.title = document.getElementById("recipe-title").firstElementChild.innerHTML + " | Recipes | ARG";
</script>
</html>
