<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fileUpload extends Model
{
    protected $fillable = [
        'name',
        'file_path'
    ];
}
