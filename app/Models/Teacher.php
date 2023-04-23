<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['name' , 'addres' ,'phone' , 'email' , 'status'];

    public function getRouteKeyName()
    {
        return "name";
    }

    // protected $guarded = []; - antifillable
}
