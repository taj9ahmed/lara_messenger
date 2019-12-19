<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
public function __construct()
{
    
}

    protected $fillable = [
        'conv_id', 'content', 'owner_id'
    ];
}
