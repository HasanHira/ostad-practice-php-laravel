<?php
/**
 * Global Scope ( $variable that create outside of function(s) )
 * $variable that only work in outer of function(s) if not use, word in func..
 *  global $varibale or echo $GLOBALS['varible']
 */

 #1 global scope
 $varName = 1;
 function printVarName(){
    global $varName;
    echo $varName;
 }
 printVarName();
 echo PHP_EOL;
 echo "================\n";

 #2 global $variable
 $vName = 5;
 function printVName(){
    echo $GLOBALS['vName'];
 }
 printVName();
 echo PHP_EOL;
 echo "================\n";

/**
 * Local Scope ($variable that create inside function(s))
 * $variable that only work inside function(s) if not use,
 *  global $varibale or echo $GLOBALS['varible']
 */

 #1 Local Scope
 function printANum(){
     $num = 13;
    echo $num;
 }
 printANum();
 echo PHP_EOL;
 echo PHP_EOL;
 
 /**
  * Static Scope 
  * this kind of $variable has memory
  */
  
  #1 example normal
  echo "==== Example Normal ====\n";
  function numPrint(){
      $n;
      $n = $n ?? 0;
      $n++;
      echo "{$n} \n";
    }
    numPrint();
    numPrint();
    numPrint();
    echo PHP_EOL;
    
    #1 example static
echo "==== Example Static ====\n";
 function numAPrint(){
    static $i;
    $i = $i ?? 0;
    $i++;
   echo "{$i} \n";
}
numAPrint();
numAPrint();
numAPrint();
