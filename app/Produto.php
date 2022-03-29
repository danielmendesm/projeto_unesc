<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public function lista(){
    
        return array(
            ['nome'=>'Anzol','valor'=>'10','estado'=>'novo'],
            ['nome'=>'Vara de pesca','valor'=>'1000','estado'=>'seminovo'],
            ['nome'=>'Isca','valor'=>'10','estado'=>'Bom estado'],
        );
        
    }
}
