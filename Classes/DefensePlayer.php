<?php 

namespace Classes;

use Interfaces\PlayerInterface;

class DefensePlayer implements PlayerInterface {

    public function play() {
        echo "Defense";
    }
}