<?php

for($number = 33; $number < 543; $number++){ // make a variable number and loop it through 543

    if($number % 5 == 0 && $number % 9 == 0){ // if number is dividable by both 5 and 9 print Web 
        echo "Web </br>";
    }

    elseif($number % 5 == 0){ // if number is dividable by 5 print Software
        echo "Software </br>";
    }

    elseif($number % 2 == 0){ // if number is even print the number in bold
        echo "<b>$number</b> </br> \n";
    }
    
    elseif($number % 9 == 0){ // if the number is dividable by 9 then print Developer
        echo "Developer </br> \n";
    }

    else{ // if none of the above are true then just print the regular number
        echo "$number </br> \n";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
</body>
</html>