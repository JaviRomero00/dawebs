<?php

$x = 4;

switch ($x) {
    case 0:
        echo "Vale 0";
        break;
    case 1:
        echo "Vale 1";
        break;
    case 2:
        echo "Vale 2";
        break;
    case 3:
        echo "Vale 3";
        break;
    case 4:
        echo "Vale 4";
        break;
}
echo "\n";

for ($i = 1; $i <= 10; $i++) {
    echo $i . "\n";
}

echo "\n";

if (1 == 2) {
    echo "Sí";
} else {
    echo "No";
}

echo "\n";

if (1 == 2):
    echo "Sí";
else:
    echo "No";
endif;

echo "\n";

$y = 1;

while ($y < 10):
    echo "vale" . $y . "\n";
    $y++;
endwhile;
