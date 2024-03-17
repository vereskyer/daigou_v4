<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteorderImage extends Model
{
    use HasFactory;

    protected $fillable = ['siteorder_id', 'image'];

    public function siteorder()
    {
        return $this->belongsTo(Siteorder::class);
    }
}
