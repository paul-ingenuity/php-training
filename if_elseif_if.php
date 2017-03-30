<?php
$t = date("H");
echo "The time is:" . $t . " ";

if ($t < 10) {
    echo "Have a good morning!";
}elseif($t < 20){
    echo "Have a good day!";
}else{
    echo "Time to sleep!";
}
?>
