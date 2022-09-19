<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\DefaultDatetimeFormat;


class Length extends Model
{
    use HasFactory;
    use DefaultDatetimeFormat;

    protected $table = 'lengths';
    protected $fillable =['name','len','sh',];
}
