<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoice';
    protected $guarded = [];

//hasOne relationship 
    public function showdetails(){
                            //which model that id , original id 
        return $this->hasOne(user_details::class,'invoice_id','id');
    }


    use HasFactory;
}
