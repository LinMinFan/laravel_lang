<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Encore\Admin\Traits\DefaultDatetimeFormat;


class Counter_type extends Model
{
    use HasFactory;
    use DefaultDatetimeFormat;

    protected $table = 'counter_types';
    protected $fillable =['name',];
}
