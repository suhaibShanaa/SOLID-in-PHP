<?php 

namespace Classes;

use Interfaces\PlayerInterface;

class KeppingPlayer implements PlayerInterface {

    public function play() {
        echo "Good Kepping";
    }
}