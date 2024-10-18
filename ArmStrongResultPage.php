<?php

function power($base, $exponent) {
    $rest = 1;
    for($i=1;$i<=$exponent;$i++)
    {
        (int)$rest = (int)$rest * (int)$base;
    }
    return $rest;
}


    $num = $_GET["num"];
    
    $temp = $num;
    $numSize = 0;
    $res = 0;

    while($temp != 0)
    {
        $temp = (int)($temp / 10);
        $numSize++;
    }

    //echo "Num Size : ";
    //echo $numSize;
    //echo "<br>";

    $temp = $num;

    while($temp != 0)
    {
        $rem = $temp % 10;
        //echo "rem : ";
       // echo $rem;
       // echo "<br>";
        (int)$res = (int)$res + power($rem, $numSize);
        //echo "Pow : ";
      //  echo power($rem, $numSize);
       // echo "<br><br>";
        (int)$temp = (int)$temp / 10;
    }

    if($num == $res)
    {
        echo $num;
        echo " is ArmStrong Number";
    }
    else
    {
        echo $num;
        echo " is not ArmStrong Number";
    }

    
?>