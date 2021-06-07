
<?php
$x = 5;
$y = 6;
for ($i = 0; $i < 20; $i++) {
    $x = $y;
    $y = $z;
    $z = $x + $y;
    echo $z . "\n";
}

?>