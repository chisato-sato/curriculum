<?php $fruits = [
        "リンゴ" => 150, 
        "みかん" => 50,
        "桃" => 1000,
    ];
   
    $num = [2,3,3];
    $i = 0;

function getTotal($price,$num){
    $total = $price * $num ;
    return $total;
    
    }

echo "<br>";

foreach ($fruits as $key => $price) {
    $total = getTotal($price,$num[$i]);
    echo $key."は".$total."円です。"."<br>";
  $i++;
  } 
  
  ?>

