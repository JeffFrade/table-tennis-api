<?php

namespace App\Repositories\Collections;

use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Player extends Model
{
    use SoftDeletes;

    protected $connection = 'mongodb';
    protected $primaryKey = '_id';
    protected $collection = 'players';
    protected $fillable = [
        'photo',
        'name',
        'country',
        'gender',
        'age',
        'activity',
        'playing_hand',
        'playing_style',
    ];
}