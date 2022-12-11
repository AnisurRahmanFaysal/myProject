<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable= ['name','price','quantity','created_at','updated_at'];

    protected $primaryKey = 'id';
    protected $keyType= 'string';
    public $incrementing= false;

    public function user(){
        return $this->hasOne(User::class,'products_id','id');
    }

    public function user_one_to_many(){
        return $this->hasMany(User::class,'products_id','id');
    }

    public function many_to_many(){
        return $this->belongsToMany(User::class,table:'product_user',foreignPivotKey:'product_id', relatedPivotKey:'user_id');
    }
}
