<?php

/*
Method overloading niye kno ques holo amdr toh OOP suru koreni
Tarpor recursion niye je ques korlo oita toh may be infinity loop e chole jabe..*/

#01 break
for($i=1; $i<=15; $i++){
    
    if($i==9){
        echo $i ."\n";
        break;
    }
}
echo PHP_EOL;
echo "=========== \n";
#02 break
for($i=1; $i<=15; $i++){
    
    // echo $i ."\n";
    
    // echo $i ."\n"; // This print till 9

    if($i==9){
        break;
    }
    echo $i ."\n";
    
    // echo $i ."\n"; // This print before 9
}