<?php
$friends=array(
    "hamza" => 300,
    "mariam" => 100,
    "youssf" => 150,
    "imane" => 90,
    "sara" => 200
    ) ;

$total = 0;
foreach($friends as $name =>$money) { 
$total += $money;   
if( $money >100) {  
echo " <mark>$name</mark> owes $money DH (High Debt)<br>";
} else
{
echo $name ." owes " . "$money" ." DH<br>";
}
}
echo "<br>Total money owed: " . $total . " DH";

?>   



