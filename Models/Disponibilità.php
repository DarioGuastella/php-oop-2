<?php
trait Disponibilità
{
    public $availability;

    public function isAvailable()
    {
        $result = "No";
        if ($this->availability == "Disponibile") {
            $result = "Si";
        }
        return $result;
    }
}
