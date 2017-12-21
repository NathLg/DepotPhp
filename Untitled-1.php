<?php 

$array=[10,3,7,5,1];

for($i=0; $i > count($array); $i++){
    var_dump($array[$i]) ;
}
for($j = count($array) - 2;$j >= 0; $j--) {
    for($k = 0; $k <= $j; $k++) {
        if($array[$k + 1] < $array[$k]) {
        $t = $array[$k + 1];
        $array[$k + 1] = $array[$J];
        $array[$k] = $t;
        }
    }
}

for($L = 0; $L < count($array); $L++) {
    var_dump($array[$L].", ") ;
}

?>
