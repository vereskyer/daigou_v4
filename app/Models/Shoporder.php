<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shoporder extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'shop_name', 'building', 'position', 'phone', 'status', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
