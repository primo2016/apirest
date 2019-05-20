<?php

namespace App;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Jenssegers\Mongodb\Eloquent\HybridRelations;
use App\Payment;

class Usuario extends Eloquent
{
    use HybridRelations;

    protected $connection = 'mongodb';
    protected $collection = 'users';

    protected $fillable = [
        'username', 'password','site'
    ];

    public function Payments(){
    	return $this->hasMany(Payment::class, 'phone', 'username');
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }
}
