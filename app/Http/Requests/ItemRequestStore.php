<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequestStore extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    // 'code', 'name', 'description', 'featureImage', 'level', 'category_id', 'unity_id', 'store_id', 'buy_price', 'sell_price'
    public function rules(): array
    {
        return [
            "name" => ['string', 'required'],
            // "code" => ["nullable", "unique:items,code"],
            // "description" => ['nullable'],
            // 'level' => ['nullable', 'numeric'],
            // 'category_id' => ['required'],
            // 'unity_id' => ['required'],
            // 'store_id' => ['required'],
            // 'sell_price' => ['nullable', 'numeric'],
            "user_id" => ["required"]
        ];
    }
}
