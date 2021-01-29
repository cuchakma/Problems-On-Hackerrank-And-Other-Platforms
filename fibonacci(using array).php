<?php
//find the nth term value of the Fibonaci Series
$n = 5;
function Fib( $n ) {
    $fib_array = array();

    if( $n <= 1) {
        return $n;
    }

    $fib_array[0] = 0;
    $fib_array[1] = 1;

    for( $i = 2; $i < $n; $i++ ) {
        $fib_array[$i] = $fib_array[$i - 2] + $fib_array[$i - 1];
    }

    return $fib_array[$n-1];
}

echo Fib($n);


