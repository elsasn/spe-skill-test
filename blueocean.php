<?php

function blueocean($array, $number) {
$reverse = array_reverse($number);
if($reverse[0]==1){
unset($array[0]);
$result = $array;
} else {

}
return $result;
}
echo "<br/>";
print_r(blueocean([1,2,3,4,6,10], [1]));
?>