<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RaseAnimale extends Model
{
    protected $table = 'animal_races';
    public $timestamps = false;

    public function specie()
    {
        return $this->hasOne('App\SpeciiAnimale', 'id', 'animal_species_id');
    }
}
