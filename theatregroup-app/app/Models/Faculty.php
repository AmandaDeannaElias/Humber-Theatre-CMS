<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    protected $primaryKey = 'faculty_id';
    public $timestamps = false;

    protected $fillable = ['faculty_name', 'faculty_position', 'ht_id'];
}
