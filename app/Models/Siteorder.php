<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siteorder extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'site', 'description', 'image'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function siteorder_images()
    {
        return $this->hasMany(SiteorderImage::class);
    }
}
