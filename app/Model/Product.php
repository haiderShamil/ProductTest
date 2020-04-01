<?php

namespace App\Model;
use App\Model\Stock;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name', 'unit_price','pur_price','model','description','expire','production','qty', 'unitinstock','min_qty','max_qty','stock_id'
    ];
public function stock()
{
    
    return $this->belongsTo(Stock::class);
}
}
