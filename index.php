<?php

#IF ELSEIF ELSE

/* OR of || als operator gebruiken dan moet 1 of de twee true zijn  */
/* AND of && */
/* XOR of ^ is zoals of, maar mogen niet allebei true zijn*/
/* NOT of != */

$country = 'Germany';

if($country == 'Germany'){

   $version = 'German';
   $message = 'Sie sehen unseren Katalog auf Deutsch';

}elseif($country == 'France'){

   $version = 'French';
   $message = 'Vous verrez notre catalogue en Francais';

}elseif($country == 'Italy'){

   $version = 'Italian';
   $message = 'Vedrete il nostro catalogo in Italiano';

}else{

   $version = 'English';
   $message = 'You will see our catalog in English';

}
echo $message.'<br/>';


$result = 10;
$result =12;

#SHORTNOTATION if else statement () ? : ;
$result == 10 ? $test = 'test' : $test = "";

#if in een if
$result == 10 ? ($result2 == 12 ? $test= 'test1' : $stest = 'test2') : $test = "";

$result == "" ? $input=$result : $input='Empty';

#SWITCH
/* vanaf meer dan 2 keuzes sowieso naar een switch overgaan.
Met een if wordt eerst alle code ingelezen en daarna worden de condities gecontroleerd.
Bij switch wordt eerst naar de case gekeken en enkel de code van de juiste case wordt naar de DOM opgeladen.
vergeet zeker geen breaks! En de default is verplicht*/

echo '<h3> Oefening kortingen </h3>';
echo '<p> opdracht: Ligt de totaalprijs onder de 100 euro, geven we geen korting.
  Vanaf 100 euro is het 5% korting. Tussen 150 en 250 is het 7,50% korting. Tussen 250 en 500 is het 15%.
  En tot slot boven 500 euro is het 20% korting. </p>';

# kassasysteem

/*opdracht: kijken of totaalprijs onder 100 euro ligt.
Onder de 100 is geen korting, boven honder en onder 150 doen we 5% korting (weergeven).
Boven 150 euro 7.50 % boven 250 euro dan 15% korting op totaalbedrag, boven de 500 euro is 20% korting.*/

$prijs = 20;

switch (true){
  case ($prijs<100):
    $korting = 0;
    echo 'Je krijgt geen korting <br/>';
    break;
  case ($prijs>=100 && $prijs<150):
    $korting = 0.05 * $prijs;
    echo 'Je krijgt ' , $korting , ' euro korting. <br/>';
    break;
  case ($prijs>=150 && $prijs<250):
    $korting = 0.075 * $prijs;
    echo 'Je krijgt ' , $korting , ' euro korting. <br/>';
    break;
  case ($prijs>=250 && $prijs<500):
    $korting = 0.15 * $prijs;
    echo 'Je krijgt ' , $korting , ' euro korting. <br/>';
    break;
  case ($prijs>=500):
    $korting = 0.20 * $prijs;
    echo 'Je krijgt ' , $korting , ' euro korting. <br/>';
    break;
  default:
    $korting = 0;
    echo 'Er ging iets mis met de korting. <br/>';
}

$eindprijs =  $prijs - $korting;
echo 'Je moet ' , $eindprijs , ' euro betalen.<br/>';


echo '<h3> Lussen </h3>';
#LUSSEN
/* foreach ook een lussoort, maar die is enkel voor arrays */

echo '<h5> For Loop </h5>';
#forloop

for($i=1; $i<=3; $i++)
{
    echo $i.". Hello World! <br/>";
}

#oefening 1 for loops
echo '<p> Let\'s say hello to everyone. :) </p>';

$mijnKlas[] = 'Dimphy';
$mijnKlas[] = 'Vincent';
$mijnKlas[] = 'Luc';
$mijnKlas[] = 'Mathias';
$mijnKlas[] = 'Laurent';
$mijnKlas[] = 'Tim';
$mijnKlas[] = 'Dorien';
$mijnKlas[] = 'Fre';

for($i=0; $i<sizeof($mijnKlas);$i++)
{
  echo 'Goede avond ' , $mijnKlas[$i] , '! <br/>';
}

echo '<h5> While Loop </h5>';
#whileloops
$l=0;
while($l<sizeof($mijnKlas)){
  echo 'Goede avond ' , $mijnKlas[$l] , '! <br/>';
  $l++;
}

echo '<p>Oefening while loop</p>';
/* array 1-10 en alle oneven getallen weergeven */

$n = 1;
$onevenGetallen = [];

while (sizeof($onevenGetallen)<10)
{
  if ($n%2 != 0){
    $onevenGetallen[] = $n;
  }
  $n++;
}
echo '<pre>';
print_r($onevenGetallen);
echo '</pre>';


echo '<h5> Do While Loop </h5>';
#dowhileloops
/* ondanks dat de conditie waar of nietwaar is word het do-blok sowieso minstens 1 maal uitgevoerd.*/


echo '<h5> Oneindige loops </h5>';
#oneindige loops
# conditie beter als volgt 'true'==$uitkomst

echo '<h5> oefening loops </h5>';
/* while loop, do while en twee for loops */

$stringA = 'abc';
$stringB = 'xyz';

$b=0;

while ($b<9)
{
  echo ' ', $stringA;
  $b++;
}
echo '<br/>';
$b=0;
do{
  echo ' ',$stringB;
  $b++;
}while($b<9);
echo '<br/>';
for ($i=1; $i<=9;$i++){
  echo ' ', $i;
}
echo '<br/>';

$l='a';
for ($i=1; $i<=6; $i++)
{
  echo $i , '. Item ' , $l, '<br/>';
  $l++;
}
echo '<br/>';

 ?>
