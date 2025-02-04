<?php 

    for($numri = 50; $numri <=100; $numri+=2){
        echo"$numri .<br>";
    }

    $studens = ["Dorant","Bled","Nil","Blin"];
    foreach($studens as $studens){
        echo $studens. "<br>";
    }

    $nr1=3
    $nr2=5
    function numbers($nr1, $nr2){
        if($nr1>$nr2){
            return($nr1);
        }
        else($nr1<$nr2){
            return($nr2);
        }
    }
    echo numbers(18,30)

    function qift($q){
        if($q%==0){
            echo"$q eshte qift";
        }
        else{
            echo"$q nuk eshte qift";
        }
    }   
    qift(142)

    function 
?>