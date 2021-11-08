<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function __construct($nbLane = 1, $maxSpeed = 10)
    {
        parent::__construct($nbLane, $maxSpeed);
    }
    
    public function addVehicle(Vehicle $vehicle): string
    {
        
        $this->currentVehicles [] = $vehicle;
        $answer = "This vehicle is allowed in this way";

        return $answer;
    }
}