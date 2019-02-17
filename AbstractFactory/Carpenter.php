<?php
declare(strict_types=1);

namespace AbstractFactory;


class Carpenter implements DoorFittingExpert
{
    public function getDescription()
    {
        echo 'I can only fit wooden doors';
    }

}