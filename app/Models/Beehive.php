<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beehive extends Model
{
    protected $fillable = [
        'name',
        'bee_count',
        'ownerFirstName',
        'ownerLastName',
    ];
}
