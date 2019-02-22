<?php
$a = 3;
$b = 4;
$strana = 6;
$uhel = 60;

$obdelnikObsah = $a * $b;
$vyska = $strana * sin(deg2rad($uhel)); //v= a * sin uhlu (prevedeni deg -> rad, pak fce)
$trojuhelnikObsah = round($vyska * $strana / 2); // round() podle pravidel
?>


<?php
echo "Obsah obdelníku o stranách a: $a cm a b: $b cm je $obdelnikObsah,";
echo '<br>';
echo "Obsah rovnostranného trojúhelníku o straně a: $strana cm a úhlu: $uhel" . '°' . "je $trojuhelnikObsah cm";
?>