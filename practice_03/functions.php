<?php
/**
 * factorial function with type hint.
 * For function return type fnName():typeHint as newNum():int{}
 */
function calcFactorial( int $x ) { //with type hint php v-5+
    # In php v-5 check
    // if(gettype($x) != "integer"){
    //     return "Invalid Type.";
    // }
    $res = 1;
    for ( $i = $x; $i > 1; $i-- ) {
        $res *= $i;
    }
    return $res;
}

/**
 * Serveme() function
 */
function serveMe($foodName="Coffee", $items="1 cup"){

    return "{$items} of {$foodName} has/have been served.";

}