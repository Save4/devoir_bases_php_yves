<!DOCTYPE html>
<html>
<head>
	<title>devoir des bases du phph</title>
</head>
<body>
<?php
 //les varibles

$entier=5;
$entiers=-5;
$caract="hello";
$decimal=5.6;

echo $entier.'<br/>';
echo $entiers.'<br/>';
echo $caract.'<br/>'; 
echo $decimal.'<br/>';
echo " ------------------------------------------";
echo "---- ------------------------------------------ <br/>";

echo "<br/>";
echo " <br/>";
//Les opérateurs arithmétiques

$a=3;
$b=7;
$c=4;
$d=9;

echo $a + $c."<br/>";           
echo $d - $b."<br/>";          
echo $d / $a."<br/>";          
echo $b % $c."<br/>";         

echo "---- ------------------------------------------ <br/>";

echo "<br/>";
echo " <br/>";


//2 les booleens
$booleen=true;
$booleens=false;
if ($booleens==true) {
    echo "good <br/>";
}elseif ($varibl==false) {
	echo "c'est pas bon <br/>";
}else
echo "c'est un entier <br/>";
echo " ------------------------------------------";
echo "---- ------------------------------------------ <br/>";

echo "<br/>";
echo " <br/>";

//3 les conditions
$math=9;
$france=6;
if ($math>=10 AND $france>=10) {
	echo "vous etes fort en math et en france <br/>";
}
elseif( ($math<=10 AND $france>=10) OR ($math>=10 AND $france<=10)){
	echo "il faut choisir votre orientation   <br/>";
}
else{
	echo "vous etes nul";
	echo "<br/>";
}
echo "fin if ------------------------------------------";
echo "---- ------------------------------------------ <br/>";

echo "<br/>";
echo " <br/>";

$nombre=100;
switch ($nombre) {
	case 10:
		echo "votre nombre est 10 <br/>";
	case 50:
		echo "votre nombre est 50 <br/>";
		break;
		
	default:
		echo "votre nombre n' est ni 10 ni 50 peut etre 100<br/>";		
echo "<br/>";
		break;
}

echo " fin switch ------------------------------------------";
echo "---- ------------------------------------------ <br/>";

echo "<br/>";
echo " <br/>";/*

//4 les boucles

//while
$x=0;
while ($x <= 10) {
	echo "c'est le nombre : ".$x."<br/>";

	$x++;
}
echo "fin while ------------------------------------------";
echo "---- ------------------------------------------ <br/>";

echo "<br/>";
echo " <br/>";
// do while
$y=0;
do{
	echo "c'est le nombre : ".$y."<br/>";
	$y++;


}
while ($y<= 10);

echo "fin do while------------------------------------------";
echo "---- ------------------------------------------ <br/>";

echo "<br/>";
echo " <br/>";
// for

for ($i=0; $i <10 ; $i++) { 
	
	echo "c'est le nombre : ".$i."<br/>";



}
echo "<br/>";
echo " <br/>";

for ($a=10; $a >0 ; $a--) { 
	echo "c'est le nombre : ".$a."<br/>";
}
echo "4 a 5 fin for------------------------------------------";
echo "---- ------------------------------------------ <br/>";

echo "<br/>";
echo " <br/>";
//5 les tableaux avec foreach
$Name = array('ciza' , 'keza','nziza');

for ($i=0; $i <=2 ; $i++) { 
	echo $Name[$i]."<br/>"; 
	echo "<br/>";
echo " <br/>";
}

foreach ($Name as $name) {
	echo $name."<br/>";
	echo "<br/>";
echo " <br/>";
}
//for ($i=0; $i <3 ; $i++) { 
	//echo $Name[$i].<br/>;}

$NameAge = array(
	'ciza' =>10 , 
	'keza' =>15 ,
	'nziza' =>20);
foreach ($NameAge as $nom => $age) {
	echo $nom." a l'age egale a ".$age." ans <br/>";
	echo "<br/>";
echo " <br/>";
}
echo $Name[0]."<br/>";
echo $NameAge['ciza']."<br/>";
echo "<br/>";
echo " <br/>";


$identite  = array(
         array('kaze','jean', 20 ),
         array('rukundo','brice', 21 ),
         array('kwizera','jules', 23 ),
         array('nziza' ,'jacque', 25 )
);
echo $identite[0][0].'  '.$identite[0][1].' a '.$identite[0][2].' ans  <br/>';
echo $identite[1][0].'  '.$identite[1][1].' a '.$identite[1][2].' ans  <br/>';
echo $identite[2][0].'  '.$identite[2][1].' a '.$identite[2][2].' ans  <br/>';
echo $identite[3][0].'  '.$identite[3][1].' a '.$identite[3][2].' ans  <br/>';
echo "<br/>";
echo " <br/>";

for ($ligne=0; $ligne <4 ; $ligne++) { 
	$lignenum=$ligne+1;
	echo " Mr ".$lignenum."<br/>" ;
	echo "<ul";
	for ($colonne=0; $colonne < 3; $colonne++) { 
		echo "<li>".$identite[$ligne][$colonne]."</li>";
}
echo "</ul";
echo "<br/>";
echo " <br/>";
echo "<br/>";
echo " <br/>";
}
//6 les fonctions

function FunctionN()
{
	 echo "salut";
}
FunctionN();

function FunctionName($value='',$i)
{
	echo "salut monsieur  ".$value. " tu a  ".$i."<br/>";
}
echo "<br/>";
FunctionName('yves',7);
echo "<br/>";
FunctionName('Tous le monde',9 );

*/

?>
</body>
</html>