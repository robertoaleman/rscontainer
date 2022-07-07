<?php 

/* Rightsizing to Container 1.0.0
by Roberto Aleman
ventics.com

The rightsizing to container, is the procedure to follow to optimize according to some estimates, the space to be occupied by a load in a standard container is 20 feet, 40 feet or 40 feet extended. To make an appropriate internal measures displacement of the containers, which are standard must take into account the dimensions of the boxes to be used, pallets measures if they are used and the weight per box. In this case I developed the calculation, with boxes of the same size, which can not be rotated and all have the same weight. There are several types of calculations: loose cargo Loaded with different types of boxes Loaded with boxes of equal size and weight

The Class:
This class allow calculate the number of box that can it fill a container, for sea shipping 
The class suggest a result based the dimensions and weight of the box, relative to the space available in standard maritime shipping containers ..


Important: 

It assumes that the box can not be rotated
It assumes that no pallets are used



*/
class rightsizing_to_container    
{



function calculate($lengthb,$widthb,$heighb,$wxboxb,$nboxb) 
{
	$totalweigth = $wxboxb *  $nboxb;


 	$c20feetLength   = 5.918 /$lengthb;
 	$c20feetWidth = 2.352 /$widthb;
 	$c20feetHeight = 2.392 / $heighb;

 	$c40feetLength   = 12.031 /$lengthb;
 	$c40feetWidth = 2.352 / $widthb;
 	$c40feetHeight = 2.392 / $heighb;
	
	$c40feetHCLength   = 12.031 /$lengthb;
 	$c40feetHCWidth = 2.352 / $widthb;
 	$c40feetHCHeight = 2.697 / $heighb;

  
 $c20feetLength = floor($c20feetLength); 
 $c20feetWidth =   floor($c20feetWidth ); 
 $c20feetHeight =  floor($c20feetHeight ); 
 
  
 $c40feetLength = floor($c40feetLength ); 
 $c40feetWidth =  floor($c40feetWidth ); 
 $c40feetHeight = floor($c40feetHeight ); 


 $c40feetHCLength = floor($c40feetHCLength ); 
 $c40feetHCWidth =  floor($c40feetHCWidth ); 
 $c40feetHCHeight = floor($c40feetHCHeight ); 

 $totalforc20feet = $c20feetLength * $c20feetWidth * $c20feetHeight;
 $totalforc40feet = $c40feetLength * $c40feetWidth * $c40feetHeight;
 $totalforc40feetHC = $c40feetHCLength * $c40feetHCWidth * $c40feetHCHeight; 
 
 echo "<h2>Results</h2>";
 
 echo "<br/>The numnber of boxes for your sea shipping to fill a 20 feet container is : ".$totalforc20feet;
  echo "<br/>The numnber of boxes for your sea shipping to fill a 40 feet container is : ".$totalforc40feet;
   echo "<br/>The numnber of boxes for your sea shipping to fill a  40 feet HC container is : ".$totalforc40feetHC;
   echo "<h4> Total Weigth is ". $totalweigth." Kg to ".$nboxb. " Boxes with ".$wxboxb ." Kg per box</h4>";
  
  if( ($totalweigth < 18000) and ($nboxb <$totalforc20feet))
 {
	 echo "<h3/>this sea shipping is valid to 20 feet container</h3>";
		}
		
 if( ($totalweigth > 18000) and ($totalweigth < 26000) and ($nboxb <$totalforc40feet))
 {
	 echo "<h3>this sea shipping is valid to 40 feet container</h3>";
		}
		
 if( ($totalweigth > 18000) and ($totalweigth < 26000) and ($nboxb <$totalforc40feetHC) and ($nboxb >$totalforc40feet))
 {
	 echo "<h3>this sea shipping is valid to 40 feet HC container</h3>";
		}
		
 if( $totalweigth > 26000)
 {
	 echo "<br/><b> the boxes weigth is very big..</b>";}
		} 
}
    
    ?>