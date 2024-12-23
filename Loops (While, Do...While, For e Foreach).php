<?php

//while

$y = 1;
while ($y <= 5){
    echo "O número é: $y <br>";
    $y++;
}

echo"<br>";

$y = 0;
while ($y <= 100){
    echo "O número é: $y <br>";
    $y+=10;
}

//Do...while
echo"<br>";

$b = 1;

do {
    echo "O número é: $b <br>";
$b++;

} while ($b <= 20);

echo "<br>";

//for
for ($i = 0; $i < 11; $i++) {echo"Olá mundo $i ! <br>";
}

echo "<br>";

//FOREACH
$cores =["Amarelo","Verde","Laranja","Branco"];
foreach ($cores as $valor) {
    echo "Olá Mundo $valor! <br>";
}
?>