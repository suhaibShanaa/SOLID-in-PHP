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
            // $player->play();
            
            // !!! The Match Model is High Level we break dependance principle becuase make Match depend on Low level Class Makeing a functions
            if($player instanceof AttackPlayer){ 

                $player->Attack();

            }else if($player instanceof DefensePlayer){
                // $player->Defense();
            
                /*  if Keeper Had a Red Card and Out of the game */ 
                // The Defense Can't Keeping and This Make Error and Break 
                $player->Keeping();

            }
            /*  if Keeper Had a Red Card and Out of the game */
            
            // else if($player instanceof KeepingPlayer){
            //     $player->Keeping();

            // }
            
            echo "\n";

        }
    }



}