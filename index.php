<?php
require 'gcd.php';
$result = false;
$errors = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  if (isset($_POST['num1']) && (filter_var($_POST['num1'], FILTER_VALIDATE_INT))){
    $n1 = $_POST['num1'];
  }
  else {
    $errors['num1'] = 'Please enter an integer';
  }

  if (isset($_POST['num2']) && (filter_var($_POST['num2'], FILTER_VALIDATE_INT))){
    $n2 = $_POST['num2'];
  }
  else {
    $errors['num2'] = 'Please enter an integer';
  }

  if (empty($errors)){
    $result = gcd($n1,$n2);
  }
}
?>

<!DOCTYPE>
<html>
<head>
  <title>gcd</title>
  <link rel="stylesheet" href="index.css" type="text/css" media="screen" />
</head>
<body>
  <div class="wrapper">
    <p>Find the greatest common denominator</p>

    <form action="#" method="post">
    <p>
      <label for="num1">First Number</label><span class="error">
        <?php if (array_key_exists('num1', $errors)) echo $errors['num1'];?></span>
      <input type="number" name="num1">
    </p>
    <p>
      <label for="num2">Second Number</label><span class="error">
        <?php if (array_key_exists('num2', $errors)) echo $errors['num2'];?></span>
      <input type="number" name="num2">
    </p>
      <p><input type="submit" name="submit" value="Submit" class="formbutton"/> </p>
  </form>

  <p class="success">
      <?php
      if ($result) {
        echo 'The greatest common denominator of ' . $n1 . ' and ' . $n2 . ' is ' . $result;
      }
      
      ?>
    </p>
</div>
  
</body>
</html>
