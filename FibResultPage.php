<?php

    function Fibo($number) {
            if($number == 0)
            {
                return 0;
            }
            elseif($number == 1)
            {
                return 1;
            }
            else
            {
                return Fibo($number-1) + Fibo($number-2);
            }
    }




    $num = $_POST["num"];
    
    
    
    for($i=0;$i<$num;$i++)
    {
        echo Fibo($i);
        echo " ";
    }
    
    //Fibo($num);

    

    
?>