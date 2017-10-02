/* Le code commenté est faux. Il est la juste pour voir les différences avec le bloc juste en dessous, qui est vrai.
<?php
$P1 = "Une phrase";
$P2 = "UNe second phrase";
$Phrases = function ($P1, $P2) {
$C = $P1 . $P2;
return $C;
echo $C; };
?>*/

<?php
$P1 = "Une phrase";
$P2 = "Une second phrase";
function Phrases($P1, $P2) {
 return ($P1 .$P2);
}
echo Phrases($P1, $P2);
?>
