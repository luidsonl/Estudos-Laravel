<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;
use App\Enums\DataType;


class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
        'type',
    ];


    public static function rules()
    {
        return [
            'type' => [
                'required',
                Rule::in(DataType::getValues()),
            ],
        ];
    }
}
