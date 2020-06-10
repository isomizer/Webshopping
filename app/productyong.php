<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Productyong extends Model
{
    protected $table = 'productyong';
    protected $primaryKey = 'id';
    protected $fillable = ['product_code', 'name', 'type', 'purchase_price'
    , 'available_amount', 'purchase_unit', 'packing_purchase', 'retail_price', 
    'retail_unit', 'retail_packing'];
    public $timestamps = false;


}
