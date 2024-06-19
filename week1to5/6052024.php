<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2</title>
</head>
<body>

    <!-- <?php

    date_default_timezone_set("Canada/Eastern");
    $hour = rand(1,24);
    echo $hour;

    if($hour > 4 && $hour < 12) {
        echo " Good morning";
    } else if($hour > 12 && $hour < 17) {
        echo " Good afternoon";
    } else if($hour > 17 && $hour < 19) {
        echo " Good evening";
    } else {
        echo " Good night";
    }


    ?> -->

    <?php

    $num = rand(1,100);
    // echo $num;

    if($num % 3 == 0 && $num %5 != 0) {
        echo " Fizz";
    } else if($num % 5 == 0 && $num % 3 != 0) {
        echo " Buzz";
    } else if($num % 3 == 0 && $num % 5 == 0) {
        echo " Fizz Buzz";
    } else {
        echo $num;
    }

    ?>
    
       

</body>
</html>