<?php 

namespace Classes;

use Interfaces\PlayerInterface;

class DefensePlayer implements PlayerInterface {

    // public function play() {
    //     echo "Defense";
    // }
    public function Attack() {
    }
    public function Defense() {
        echo "Defense";
    }
    public function Keeping() {
    }
}