<?php
#00
// for($i = 0; $i < 26; $i++){
//     printf("%c : %c", $i+65, 90-$i);
//     echo PHP_EOL;
// }

// #01
// for($i = 10; $i > 0; $i-=1){
//     echo "$i:".(10-$i);
//     echo PHP_EOL;
// }

// #02
// for($i = 1, $j = 10; $i <= 10; $i++, $j--){
//     echo $i .": ".$j;
//     echo PHP_EOL;
// }

#03 v-1
// for($i=0; $i<100; $i++){
//     // if($i % 7==0) echo $i . "\n";
//     // if($i % 11==0) echo $i . "\n";

//     echo $i%7==0? $i."\n":'';
//     echo $i%11==0? $i."\n":'';
// }
#03 v-2
for($i=0, $j=0; $i<100; $i+=7, $j+=11){
    echo $i."\n";
    echo $j<100 ? $j . "\n" :'';
}

