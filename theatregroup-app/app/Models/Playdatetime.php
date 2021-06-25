<?php

namespace App\Models;

// use App\Models\Eprogram;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playdatetime extends Model
{
    use HasFactory;

    protected $primaryKey = 'pdt_id';
    public $timestamps = false;

    //Add fillables and token 
    protected $fillable = ['play_date', 'play_time', 'eprogram_id'];
}
