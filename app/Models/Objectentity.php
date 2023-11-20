<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Filters\ObjectFilter;
use App\Http\Filters\Filterable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Objectentity extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'entity_id',
    ];

    public function entity()
    {
        return $this->belongsTo(Entity::class,'entity_id');
    }

    public function objectvalues()
    {
        return $this->hasMany(AttributeValue::class,'objectentity_id');
    }
}
