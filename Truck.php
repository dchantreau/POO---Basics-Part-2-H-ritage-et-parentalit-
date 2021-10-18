<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    private int $storageCapacity = 500;

    private int $lading;

    private string $energy;



    public function __construct( int $storageCapacity,string $color,int $nbSeats, string $energy)
    {
        parent::__construct($color,$nbSeats);
        $this->storageCapacity=$storageCapacity;
        $this->energy = $energy;
    }

    public function truckfill(): string
    { 

        if ($this->lading = $this->storageCapacity)  {
            return "is full";
        } 
        else {$lading > $storageCapacity;
        return "in filling";}
    
        }
    public function getStorageCapacity(): string
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(string $energy): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(int $energy): void
    {
        $this->energy = $energy;
    }
}
?>


