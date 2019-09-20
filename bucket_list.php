<?php
$bucketList = [];
echo "Hoe veel activiteiten wil je toevoegen?" . PHP_EOL;
a: $aantal = readline(">");
if (is_numeric($aantal)) {
    goto b;
} else {
    echo "'$aantal' is geen getal, probeer het opnieuw!" . PHP_EOL;
    goto a;
}

b: for ($i = 0; $i < $aantal; $i++) {
    echo "Wat wil je toevoegen aan jouw bucket list?" . PHP_EOL;
    $bucketList[$i] = readline(">");
}

echo "Op jouw bucketlist staat:" . PHP_EOL;
for ($i = 0; $i < count($bucketList); $i++) {
    echo $bucketList[$i] . PHP_EOL;
}
