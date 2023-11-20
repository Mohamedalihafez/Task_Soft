<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attribute extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'type',
        'entity_id',
    ];

    
    public function scopeFilter($query,$request)
    {
        if ( isset($request['name']) ) {
            $query->where('name','like','%'.$request['name'].'%');
        }

        return $query;
    }

    static function createAttribute( $request)
    {
        $attribute = Attribute::create($request->all());

        return $attribute; 
    }

    static function updateAttribute($request)
    {
        $attribute = Attribute::find($request->id);

        $attribute->update($request->all());

        return $attribute; 
    }

    static function deleteAttribute($request)
    {
        $attribute = Attribute::find($request->id);

        $attribute->delete();

        return $attribute; 
    }
    
    static function getAttributeData($request)
    {
        $attribute = Attribute::find($request->id);

        return $attribute; 
    }

    static function getAll()
    {
        $entities = Attribute::all();

        return $entities; 
    }
    
    static function createAttributeValue($request)
    {
        $objectentity =  Objectentity::create(['entity_id' =>$request->entity_id]);
        
        foreach ($request->attribute_ids as $index => $attributeId) {

            $attributeValue =  AttributeValue::create([
                    'objectentity_id'=>$objectentity->id,
                    'attribute_id' => $attributeId,
                    'value' => $request->values[$index],
            ]);
        }

        return ['objectentity' => $objectentity , 'entity_name' =>$objectentity->entity->name , 'attribute_value' => $objectentity->objectvalues ];
    }

    public function values()
    {
        return $this->hasMany(AttributeValue::class,'attribute_id');
    }

}
