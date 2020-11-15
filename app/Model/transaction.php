<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\admincategory;
use App\Model\user;
use App\Model\usercategory;

class transaction extends Model
{
    protected $fillable = [
        'user_id', 'admin_cate', 'user_cate', 'balance', 'total_income', 'total_expenses','note'
    ];

    public function admincategory()
    {
        return $this->belongsTo(admincategory::class);
    }
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    public function usercategory()
    {
        return $this->belongsTo(usercategory::class);
    }
}
