<?php

function table(&$arr,$n, $m) {
    $arr=array();
    for ($i=0; $i<$n; $i++) {
        $arr[$i]=array();
        for ($j=0; $j<$m; $j++) {
            $arr[$i][$j]=rand(-100,100);
        }
    }
}
function table2($arr) {
    for ($i = 0; $i < count($arr); $i++) {
        for ($j=0; $j < count($arr[$i]); $j++)
        {
            echo ' | '.$arr[$i][$j];
        }
        echo '<br>';
    }
}

function t11(&$arr) {
    $arr1=$arr;
    for ($i = 0; $i < count($arr); $i++) {
        $arr[$i][0]=$arr1[$i][1];
        for ($j = 1; $j < count($arr[$i])-1; $j++) {
            $arr[$i][$j]=$arr1[$i][$j-1]+$arr1[$i][$j+1];
        }
        $arr[$i][count($arr[$i])-1]=$arr1[$i][count($arr[$i])-2];
    }
}

function t16main($arr) {
    $main=0;
    for ($i = 0; $i < count($arr); $i++) {
        $main+=$arr[$i][$i];
    }
    return $main;
}

function t16reverse($arr) {
    $reverse=0;
    for ($i = 0; $i < count($arr); $i++) {
        $reverse+=$arr[$i][count($arr)-$i-1];
    }
    return $reverse;
}


 ?>