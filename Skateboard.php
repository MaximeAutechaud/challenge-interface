<?php

class Skateboard
{
    private $nbWheel;

    /**
     * @return mixed
     */
    public function getNbWheel()
    {
        return $this->nbWheel;
    }

    /**
     * @param mixed $nbWheel
     */
    public function setNbWheel($nbWheel)
    {
        $this->nbWheel = $nbWheel;
    }

}