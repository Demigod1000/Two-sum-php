<?php

function get_vals($sum, $a){
    $len = count($a);
    $map = array();
    for($i=0;$i<$len;++$i){
        $map[$a[$i]]=true;
        $difference = $sum - $a[$i];
        if(isset($map[$difference])){
            echo $a[$i].','.$difference.PHP_EOL;
        }
    }
}

$arr = explode(' ', readline('Enter array:'));
$sum = readline('Enter the sum:');
echo get_vals($sum,$arr);


