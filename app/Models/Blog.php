<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blog';
    protected $fillable =
    [
'title',
'meta_title',
'short_description',
'description',
'meta_description',
'image',
'date',


    ];
}
