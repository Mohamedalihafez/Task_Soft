<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entity extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
    ];

    public function scopeFilter($query,$request)
    {
        if ( isset($request['name']) ) {
            $query->where('name','like','%'.$request['name'].'%');
        }

        return $query;
    }

    static function createEntity( $request)
    {
        $entity = Entity::create(
            [
                'name' => $request->name,
            ]
        );

        return $entity; 
    }

    static function updateEntity($request)
    {
        $entity = Entity::find($request->id);

        $entity->update($request->all());

        return $entity; 
    }

    
    static function getEntity($request)
    {
        $entity = Entity::find($request->id);

        return $entity; 
    }


    static function deleteEntity($request)
    {
        $entity = Entity::find($request->id);

        $entity->attributes()->delete();
        
        $entity->delete();
        

        return $entity; 
    }
    
    static function allData()
    {
        $entities = Entity::with('attributes')->paginate(10);
        return $entities; 
    }


    //relations
    public function attributes()
    {
        return $this->hasMany(Attribute::class,'entity_id');
    }


}
