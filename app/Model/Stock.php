<?php

namespace App\Model;
use App\Model\Product;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    //
    protected $fillable = [
        'name','address','description'
    ];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
