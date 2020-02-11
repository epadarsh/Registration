<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class newData extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'mobile',
        'email',
        'post',
        'street',
        'adults',
        'children',
        'donations',
        'amount',
        'persons'
    ];
}
