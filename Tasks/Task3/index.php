<?php 
  echo "REQUEST: ";
  var_dump($_REQUEST);
  echo "GET: ";
  var_dump($_GET);
  echo "POST: ";
  var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task 3</title>
</head>
<body>
  <form method="POST">
  <input name="number">
  <button type="submit">Submit</button>
  </form>
</body>
</html>