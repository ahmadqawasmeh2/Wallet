<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Model\usercategory;
use App\Model\transaction;


class user extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'phonenumber', 'birthdate', 'Password', 'image'
    ];

    public function usercategory()
    {
        return $this->hasMany(usercategory::class);
    }

    public function transaction()
    {
        return $this->hasMany(transaction::class);
    }
}
