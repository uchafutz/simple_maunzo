<?php

namespace App\Models\Invetory;

use App\Models\Store\Store;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'description', 'featureImage', 'level', 'category_id', 'unity_id', 'store_id', 'buy_price', 'sell_price', 'user_id'];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function unities()
    {
        return $this->belongsTo(Unity::class, 'unity_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function stores()
    {
        return $this->belongsTo(Store::class, 'store_id');
    }

    public static function  getList()
    {

        return self::query()->where(['user_id' => Auth::user()->id])->paginate(10);
    }
}
