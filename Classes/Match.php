<?php

namespace Classes;

class Match 
{

    
    private $playerList; // 11 Player

    public function __construct( Array $players){

        $this->playerList=$players;
        
    }

    public function start(){
        echo "Start Play";
        echo "\n";

        foreach ($this->playerList as $player){
            
            $player->play();
            echo "\n";

        /*If Case Keeper Out Of Game The Defense Can Keeping Becuase The Modal Match Depend on Abstraction Not Low Level*/ 
            // if( $player instanceof DefensePlayer){
            //     $player->play();
            // }

        }
    }



}