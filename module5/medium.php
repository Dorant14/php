<?php 

$items = array(
    array("name" => "uje", "price" => 0.20)
    array("name" => "CoceCola", "price" => 0.80)
    array("name" => "Orbit", "price" => 0.60)
    array("name" => "7days", "price" => 0.50)
)

function total_price($items)
    $sum =0;
    foreach($items sd $items){
        $sum+=$items["price"];
    }

?>