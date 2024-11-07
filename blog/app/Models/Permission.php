<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 */
class Permission extends Model
{
    use HasFactory;


    protected $fillable = ['name','description'];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
