<?php

function prompt($message) {
  echo("<script type='text/javascript'> var answer = prompt('$message'); </script>");

  $name = "<script type='text/javascript'> document.write(answer); </script>";
  return($name);
}


$message = "Please Enter Your Name...";
$name = prompt($message);

echo "Hello there, $name.";