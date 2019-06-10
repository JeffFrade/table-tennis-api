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
        'player_id',
        'photo',
        'name',
        'country',
        'gender',
        'birth_date',
        'activity',
        'playing_hand',
        'playing_style',
    ];
}