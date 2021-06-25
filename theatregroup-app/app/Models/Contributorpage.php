<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contributorpage extends Model
{
    use HasFactory;

     //PK not by convention
     protected $primaryKey = 'contributorpage_id';

     //timestamp not needed 
     public $timestamps = false;

     protected $fillable = [
        'staff_title', 'description', 'eprogram_id', 'sr_id', 'contributor_id'
     ];

     public function Eprogram()
    {
        return $this->belongsTo(Eprogram::class, 'eprogram_id');
    }
    public function Staffroles()
    {
        return $this->hasMany(Staffrole::class, 'sr_id');
    }
    public function Contributors()
    {
        return $this->hasMany(Contributors::class, 'contributor_id');
    }
}
