<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name'
   ];
   protected $with = ['privileges'];

    static function upsertInstance($request)
    {
        
        $role = Role::updateOrCreate(
            [
                'id' => $request->id ?? null
            ],
            [
                'name' => $request->name,
            ]
            );

        return $role;    
    }

    //Relations
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function privileges()
    {
        return $this->belongsToMany(Privilege::class);
    }
}
