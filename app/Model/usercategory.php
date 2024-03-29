<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Model\user;
use App\Model\transaction;

class UserCategory extends Authenticatable
{
    use Notifiable;
     protected $table='user_categorys';
    protected $fillable =['name', 'user_id', 'income', 'expenses'];

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function transaction()
    {
        return $this->hasMany(transaction::class);
    }

}
