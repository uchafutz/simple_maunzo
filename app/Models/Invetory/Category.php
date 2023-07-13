<?php

namespace App\Models\Invetory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description'];

    public static function getList()
    {
        return self::query()->paginate(10);
    }
}
