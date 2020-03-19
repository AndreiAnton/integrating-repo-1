<?php
echo 'hello world!';


$a = 0;

for ($i=0; $i < 10; $i++) { 
    $a = $i;
}

echo 'a = ' . $a;

if ($a > 7) {
    echo 'a is bigger than 7!', PHP_EOL;
}
?>