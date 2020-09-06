<?php
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 15; $j++) {
        echo "*";
    }
    echo "<br>";
}

for ($i = 1; $i <= 7; $i++) {
        echo "<br>";
    for ($j = 1; $j < $i; $j++) {
        echo "*";
    }
}
echo "<br>";
for($i=7; $i>=1; $i--){
        echo "<br>";
    for($j=1; $j<=$i; $j++){
        echo "*";
    }
}

for ($i = 5; $i >0 ; $i--) {
    echo "<br>";
    for ($j = $i; $j < 6; $j++) {
        echo "&nbsp&nbsp";
    }
        for ($k = $i; $k > 0; $k--) {
        echo "*";
    }
    }