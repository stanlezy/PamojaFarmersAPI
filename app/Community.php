<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected $fillable=[
        'Name',
        'User_id',
        'Type',
        'Reason'
    ];
}
