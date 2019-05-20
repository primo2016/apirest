<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Payment extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'payments';

    protected $fillable = [
        'phone', 'amount'
    ];
}
