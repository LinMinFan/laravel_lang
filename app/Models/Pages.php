<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\DefaultDatetimeFormat;

class Pages extends Model
{
    use HasFactory;
    use DefaultDatetimeFormat;
    protected $table = 'pages';
    protected $fillable =['title','keyword','content','type',];
}
