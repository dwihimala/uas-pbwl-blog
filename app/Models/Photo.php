<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $table = "tb_photo";

    protected $primaryKey = 'id_photo';

    protected $fillable = ['date', 'title', 'text', 'id_post'];
}
