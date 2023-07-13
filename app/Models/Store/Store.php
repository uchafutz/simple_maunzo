<?php

namespace App\Models\Store;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'user_id'];

    public static function getList()
    {
        return self::query()->paginate(10);
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
