<?php
function toggleCase($text){
    $result='';
    for($i = 0; $i <strlen($text); $i++){
    $char=$text[$i];
    if(ctype_upper($char)){
        $result.=strtolower($char);
    }elseif(ctype_lower($char)){
        $result.=strtoupper($char);
    }else{
        $result.=$char;
    }
}
    
return $result;
}
echo "enter a sentence:";
$text= trim(fgets(STDIN));
echo "toggleCase:" .toggleCase($text) ."\n";
?>
