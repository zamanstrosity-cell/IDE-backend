<?php

function catchMouse($cat1, $cat2, $mouse){
  if(abs($cat1 - $mouse) < abs($cat2 - $mouse)){
    echo "Cat A got the mouse";
  }else if(abs($cat1 - $mouse) > abs($cat2 - $mouse)){
    echo "Cat B got the mouse";
  }else {
    echo "The mouse escaped";
  }
}

catchMouse(12, 23, 345);