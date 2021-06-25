<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playcredit extends Model
{
    use HasFactory;

    protected $primaryKey = 'pc_id';
    public $timestamps = false;

    protected $fillable = ['pc_title', 'pc_name', 'eprogram_id'];
    
    
}
