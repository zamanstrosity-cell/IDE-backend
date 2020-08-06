<?php


$str1 = "ahk";
$str2 = "oma";

if(strlen($str1) > strlen($str2)){
  echo "string 1 is longer";
}else if(strlen($str2) > strlen($str1)){
  echo "string 2 is longer";
}else {
  echo "equal length";
}