<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function categories()
    {
        return $this->belongsTo('App\Models\Categories');
    }

    public function statusses()
    {
        return $this->belongsTo('App\Models\Statusses');
    }
}
