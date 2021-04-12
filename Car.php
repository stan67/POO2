<?php

require_once "Vehicle.php";

class Car extends Vehicle
{
    /* -------------------- 
        PROPRIÉTÉS
    -------------------- */
    private string $energy;
    private int $energyLevel;
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];


    /* -------------------- 
        CONSTRUCTEUR
    -------------------- */
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent:: __construct($color,$nbSeats);
        $this->setEnergy($energy);
    }


    /* -------------------- 
        MÉTHODES
    -------------------- */
    public function start()
    {
        return "vroom !";
    }


    /* -------------------- 
        SET / GET
    -------------------- */

    // energy
    public function getEnergy()
    {
        return $this->energy;
    }

    public function setEnergy(string $energy) : Car
    {
        if(in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy=$energy;
        }
        return $this;
    }

    // energyLevel
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel($energyLevel)
    {
        $this->energyLevel = $energyLevel;
    }
}