<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Scopes\TenantScope;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject{
    use HasApiTokens, HasFactory, Notifiable , SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'role_id',
        'phone',
        'email',
        'password',
    ];
    
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
    
    protected static function booted()
    { 
        if(Auth::hasUser())
        {
            if(! Auth::user()->isSuperAdmin())
            {
                static::addGlobalScope(new TenantScope);
            } 
        } 
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    static function createUser( $request)
    {
        $user = User::create($request->all());

        return $user; 
    }

    static function updateUser($request)
    {
        $user = User::find($request->id);

        $user->update($request->all());

        return $user; 
    }

    static function deleteUser($request)
    {
        $user = User::find($request->id);

        $user->delete();

        return $user; 
    }
    
    static function getUser($request)
    {
        $user = User::find($request->id);

        return $user; 
    }

    static function getAll()
    {
        $entities = User::all();

        return $entities; 
    }

    public function scopeFilter($query,$request)
    {
        if ( isset($request['name']) ) {
            $query->where('name','like','%'.$request['name'].'%')
                ->orWhere('email','like','%'.$request['name'].'%')
                ->orWhere('phone','like','%'.$request['name'].'%');
        }

        return $query;
    }

    public function isSuperAdmin()
    {
        return Auth::user()->role_id == SUPERADMIN;
    }

    public function isOperator ()
    {
        return Auth::user()->role_id == OPERATOR ;
    }
    
    public function allPrivilege() 
    {
        return auth()->user()->role->all_privileges == 1;
    }

    public function role()
    {
        return  $this->belongsTo(Role::class, 'role_id');
    }
}
