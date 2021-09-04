<?php
$o = $_GET["num"];
$mit = $o / 2;


for ($i = 0; $i < $o; $i++) {
    if ($i < $o) {
        echo "todabia no supero <br>";
    }
    if ($i === $mit) {
        echo "mitad <br>";
    }
}
echo "el numero fue superado";