<?php 

namespace Classes;

use Interfaces\PlayerInterface;
use Interfaces\AttackInterface;


class AttackPlayer implements PlayerInterface,AttackInterface {

    // public function play() {
    //     echo "Attack";
    // }

    public function Attack() {
        echo "Attack";
    }
    public function Play() {
        $this->Attack();

    }
    

}