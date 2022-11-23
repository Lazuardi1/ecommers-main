<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    use HasFactory;

    protected $table = 'attribute_values';
    protected $guarded = ['id'];

    public function productAttribute(){
        return $this->belongsTo(ProductAttribute::class, 'product_attribute_id');
    }
}
