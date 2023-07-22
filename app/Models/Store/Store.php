<?php

namespace App\Models\Store;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Store extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'user_id'];

    public static function getList()
    {
        return self::query()->where(['user_id' => Auth::user()->id])->paginate(10);
    }
    public static function getStore()
    {
        return self::query()->where(['user_id' => Auth::user()->id])->first();
    }

    public static function getCount()
    {
        return self::query()->where(['user_id' => Auth::user()->id])->count();
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
