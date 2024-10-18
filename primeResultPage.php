<?php
    $num = $_POST["num"];
    $flag = 0;
    
    if($num == 1)
    {
        echo "$num is not prime or composite" ;
    }
    else {
    for($i=2;$i<$num/2;$i=$i+1)
    {
        if($num%$i==0)
        {
            $flag = 1;
        }
    }

    if($flag == 1)
    {
        echo "$num is not Prime ";
    }
    else
    {
        echo "$num is Prime";
    }
    }
?>