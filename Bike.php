<?php

class Bike implements LightableInterface
{
    /**
     * @var int
     */
    private $currentSpeed;

    public function __construct($currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function switchOn()
    {
        if ($this->getCurrentSpeed() > 10) {
            return true;
        } else {
            return false;
        }
    }

    public function switchOff()
    {
        return false;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    /**
     * @param int $currentSpeed
     */
    public function setCurrentSpeed($currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
    }
}