<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eprogram extends Model
{
    use HasFactory;

    //not by convention 
    protected $primaryKey = 'eprogram_id';

    protected $fillable = [
        'program_title'
      ];

    //timestamp not needed 
    public $timestamps = false;

    public function playcredits()
    {
        return $this->hasMany(Playcredit::class, 'eprogram_id');
    }
    public function contributorspage()
    {
        return $this->hasMany(Contributorpage::class);
    }

}
