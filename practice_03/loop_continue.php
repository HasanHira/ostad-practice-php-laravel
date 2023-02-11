<?php

/*
Method overloading niye kno ques holo amdr toh OOP suru koreni
Tarpor recursion niye je ques korlo oita toh may be infinity loop e chole jabe..*/

#01 continue
for($i=1; $i<=15; $i++){
    
    // echo $i ."\n"; // All digits will print
    if($i==9){
        // echo $i ."\n"; // print $i when it is = 9, rest of unprint
        continue;
        // echo $i ."\n"; // when $i is = 9 not print, rest of unprint
    }
    echo $i ."\n"; // when $i is = 9 skip print this, rest of print all
}
echo "=========== \n";