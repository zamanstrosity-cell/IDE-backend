<?php

function bestDeal($p1, $p2, $b){

  $notenough = $b < $p1 && $b < $p2;

  switch(true){
    case $notenough:
      echo "Sorry, your budget is not enough";
    break;

    case $b < $p1:
      if($b / 2 >= $p2){
        echo "You can afford to buy two of package 2, priced at $p2";
      }else {
        echo "You can afford to buy package 2, priced at $p2";
      }
    break;

    case $b < $p2:
      if($b / 2 >= $p1){
        echo "You can afford to buy two of package one, priced at $p1";
      }else {
        echo "You can afford to buy package 1, priced at $p1";
      }
    break;

    default:
      if($p1 > $p2){
        if($b / 2 >= $p2){
          echo "you can buy the two collections of package 2 which costs $p2 but we recommended this package which costs $p1";
        } else {
          echo "the suitable collection for your budget is package one which coast $p1";
        }
      }else if($p2 > $p1){
        if($b / 2 >= $p1){
          echo "you can buy the two collections of package 1 which costs $p1 but we recommended this package which costs $p2";
        } else {
          echo "the suitable collection for your budget is package two which coast $p2";
        }
      } else {
        echo "You can buy either collection!";
      }
  } 
}


bestDeal(15, 15, 20);