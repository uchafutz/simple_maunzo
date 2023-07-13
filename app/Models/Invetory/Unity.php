<?php

namespace App\Models\Invetory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unity extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'code', 'value'];

    public static function getList()
    {
        return self::query()->paginate(10);
    }
}
