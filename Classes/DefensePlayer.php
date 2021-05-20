<?php 

namespace Classes;

use Interfaces\PlayerInterface;
use Interfaces\DefenseInterface;

class DefensePlayer implements PlayerInterface,DefenseInterface {

    // public function play() {
    //     echo "Defense";
    // }
    
    public function Defense() {
        echo "Defense";
    }
    public function Play() {
        $this->Defense();
        
    }
}