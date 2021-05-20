<?php 

namespace Classes;

use Interfaces\PlayerInterface;
use Players\Child;
use Players\Father;

class KeppingPlayer implements PlayerInterface {

    public function play() {

        // $keeper = new Child(); // in output return 1
        $keeper = new Father();  //  in output "good keeping"  // actully must be the same output this break Liskove
        echo $keeper->Keeping();
    }
}