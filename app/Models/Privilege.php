<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Privilege extends Model
{
    use HasFactory;

    protected $fillable = [
        'name' , 'constant', 'parent_id'
    ];

    public function scopeFilter($query,$request)
    {
        if ( isset($request['parent']) ) {
            $query->where('parent_id',null);
        }

        return $query;
    }

    //Relations
    
    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    public function childPriviledge()
    {
        return $this->hasMany(Privilege::class,'parent_id');
    }
}
