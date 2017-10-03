/* Le code commenté est faux. Il est la juste pour voir les différences avec le bloc juste en dessous, qui est vrai.
<?php
$Sentence1 = "Une phrase";
$Sentence2 = "UNe second phrase";
$Sentences = function ($SentenceSentence1, $Sentence2) {
$C = $P1 . $P2;
return $C;
echo $C; };
?>*/

<?php
$Sentence1 = "Une phrase";
$Sentence2 = "Une seconde phrase";
function Phrases($Sentence1, $Sentence2) {
 return ($Sentence1 .$Sentence2);
}
echo Phrases($Sentence1, $Sentence2);
?>
