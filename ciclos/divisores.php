<?php

$num=$_POST['numero'];

for($i=1;$i<=$num;$i++) {
    if ($num%$i==0) {
        echo " $i <br>";
    }
}

?>