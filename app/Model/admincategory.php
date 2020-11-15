<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\transaction;

class admincategory extends Model
{
    //

    public function transaction()
    {
        return $this->hasMany(transaction::class);
    }
}
