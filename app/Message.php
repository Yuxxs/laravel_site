<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Message extends Model
{

    protected $fillable = [
        'text'
    ];
    protected $table = 'messages';
}
