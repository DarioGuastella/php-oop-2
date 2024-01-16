<?php
trait Disponibilità
{
    public $availability;

    public function isAvailable()
    {
        $result = "No";
        if ($this->availability) {
            $result = "Si";
        }
        return $result;
    }
}
