<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $table = "tb_post";
    protected $primaryKey = 'post_id';
    protected $fillable = ['post_date', 'post_slug', 'post_title', 'post_text'];
}
