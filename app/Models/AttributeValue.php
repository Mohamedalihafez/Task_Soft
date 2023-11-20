<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AttributeValue extends Model
{
    use HasFactory;
    use SoftDeletes;

    
    protected $fillable = [
        'value', 
        'attribute_id',
        'objectentity_id',
    ];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class,'attribute_id');
    }

    public function objectentity()
    {
        return $this->belongsTo(Objectentity::class,'objectentity_id');
    }


}
