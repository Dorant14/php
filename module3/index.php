<?php 

$points=91

if($points>0 && $points<50){
    echo("your grade is 1");
};

if($points>51 && $points<69){
    echo("your grade is 2");
};

if($points>70 && $points<79){
    echo("your grade is 3");
};

if($points>80 && $points<84){
    echo("your grade is 4");
};

if($points>85 && $points<100){
    echo("your grade is 5");
};

$day="Ejte"

switch($day){
    case("Hane"){
        echo"Nuk ki kurs";
        break;
    }
    case("Marte"){
        echo"ki kurs";
        break;
    }
    case("Merkure"){
        echo"Nuk ki kurs";
        break;
    }
    case("Ejte"){
        echo"ki kurs";
        break;
    }
    case("Premte"){
        echo"Nuk ki kurs";
        break;
    }
    default(
        echo; "vikend"
        break;
    )
}


?>

