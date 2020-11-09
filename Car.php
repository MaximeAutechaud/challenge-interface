<?php

class Car implements LightableInterface
{
    public function switchOff()
    {
        return false;
    }

    public function switchOn()
    {
        return true;

    }
}