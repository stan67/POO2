<?php

// Connexions
require "Truck.php";


// Truck 1
$truck1 = new Truck('blue', 3, 100,'fuel');
echo "Le camion à une couleur " .$truck1->getColor() ." , un nombre de  " .$truck1->getNbSeats() ." places " . "et roule en " .$truck1->getEnergy()."<br/>";
echo "La capacité maxi de son chargement est de " .$truck1->getCapacity() . " tonnes"."<br/>";
echo $truck1->setLoading(50);
echo "Le camion est chargé à " .$truck1->getLoading() ." tonnes" ." il est donc en " .$truck1->truckIsFull() ."<br/>";
echo $truck1->setLoading(100);
echo "Le camion est chargé à " .$truck1->getLoading() ." tonnes" ." il est donc en " .$truck1->truckIsFull();
echo "<br/>";
echo "<br/>";


// Truck 2
$truck2 = new Truck("dark",2,500,"electric");
$truck2->setCurrentSpeed(50);
$truck2->setLoading(450);
echo "Le camion est chargé à " .$truck2->getLoading() ." tonnes" ." il est donc en " .$truck2->truckIsFull() ."<br/>";
echo "Le camion démarre " .$truck2->forward() ."<br/>";
echo "Il roule à " .$truck2->getCurrentSpeed() ." mph" ."<br/>";
echo "Freinage sec : " .$truck2->brake();