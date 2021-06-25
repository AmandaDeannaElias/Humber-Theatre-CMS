<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Humbertheatrepage extends Model
{
    use HasFactory;
    protected $primaryKey = 'ht_id';
    public $timestamps = false;

    protected $fillable = ['faculty_year', 'special_thanks', 'eprogram_id'];
}
