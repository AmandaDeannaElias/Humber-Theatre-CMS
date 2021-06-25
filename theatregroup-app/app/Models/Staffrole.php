<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staffrole extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'sr_id';

    protected $fillable = [
        'role_name'
      ];

    public $timestamps = false;

    public function contributorspage()
    {
        return $this->belongsTo(Contributorpage::class, 'contributorpage_id');
    }
}
