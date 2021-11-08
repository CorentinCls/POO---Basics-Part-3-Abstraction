<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $stockCapacity;
    private int $load = 0;

    // La capacité de stockage doit être saisie au moment
    //  de l'Instanciation de l'objet, en plus de la couleur, du nombre de sièges et de l'énergie.

     public function __construct(string $color, int $nbSeats, int $stockCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->stockCapacity = $stockCapacity;
        
        //$this->energy = $energy;
    }

    //Celle-ci retourne in filling quand il n'est pas plein et full quand il est plein.

    public function isFull($load): string
    {
        if($load >= $this->stockCapacity){
            return "full";
        } else {
            return "in filling";
        }
    }

    /**
     * Get the value of load
     */ 
    public function getLoad()
    {
        return $this->load;
    }

    /**
     * Set the value of load
     *
     * @return  self
     */ 
    public function setLoad($load)
    {
        $this->load = $load;

        return $this;
    }

    /**
     * Get the value of stockCapacity
     */ 
    public function getStockCapacity()
    {
        return $this->stockCapacity;
    }

    /**
     * Set the value of stockCapacity
     *
     * @return  self
     */ 
    public function setStockCapacity($stockCapacity)
    {
        $this->stockCapacity = $stockCapacity;

        return $this;
    }
}