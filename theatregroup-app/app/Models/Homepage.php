<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['main_img', 'img_credit', 'main_title', 'sub_title', 'program_description', 'location', 'content_warning', 'eprogram_id'];
}
