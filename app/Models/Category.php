<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function categories(){

        return $this->hasMany(subcategory::class);
    }
    public function posts(){

        return $this->hasMany(post::class);
    }



    protected $fillable = [
        'name', 'email', 'password',
    ];
 
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function post()
    {
        return $this->belongsToMany(post::class);
    }
}
