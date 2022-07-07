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


Send $lengthb,$widthb,$heighb,$wxboxb,$nboxb  */



include("rightsizing_to_container.php");

$rightsizing = new rightsizing_to_container();
$rightsizing->calculate(0.35, 0.45,0.5,80,300); //  length box,  width box, height box, weigth box, number of boxes


?>


