<?php



for($number = 33; $number < 543; $number++){

    if($number % 5 == 0 && $number % 9 == 0){
        echo "Web </br>";
    }

    elseif($number % 5 == 0){
        echo "Software </br>";
    }

    elseif($number % 2 == 0){
        echo "<b>$number</b> </br> \n";
    }
    
    elseif($number % 9 == 0){
        echo "Developer </br> \n";
    }

    else{
        echo "$number </br> \n";
        
    }

}