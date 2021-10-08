<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected  $fillable=[
'address','user_id'

    ];

    public function user(){


        return $this->belongsto(User::class,'user_id');
    }
    




}
