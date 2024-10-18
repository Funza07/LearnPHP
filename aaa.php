<?php
function capitalizeWords($text)
{
    return ucwords(strtolower($text));
}
echo capitalizeWords("Hi dear how are you");
?>