<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\DefaultDatetimeFormat;


class Image extends Model
{
    use HasFactory;
    use DefaultDatetimeFormat;

    protected $table = 'images';
    protected $fillable =['name','text','img',];
}
