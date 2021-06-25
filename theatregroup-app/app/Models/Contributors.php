<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contributors extends Model
{
    use HasFactory;

    protected $primaryKey = 'contributor_id';

    protected $fillable = [
        'first_name', 'last_name'
      ];

    public $timestamps = false;

    public function contributorspage()
    {
        return $this->belongsTo(Contributorpage::class, 'contributorpage_id');
    }
}
