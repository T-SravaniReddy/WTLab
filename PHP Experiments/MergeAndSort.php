<?php
    $a1=array(1,3,15,7,5);
    $a2=array(4,42,20,8,6);
    $num=array_merge($a1,$a2);
    rsort($num);
    echo "Sorted Merged List: ";
    $arrlength = count($num);
    for($x=0;$x < $arrlength; $x++) {
	    echo $num[$x]." ";
    }
?>
