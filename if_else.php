<?php
$t = date("H");
echo "The time is:" . $t . " ";

if ($t < 20) {
    echo "Have a good day!";
}else{
    echo "Time to sleep!";
}
?>
