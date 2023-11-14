<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        'airport_id',
    ];

    public function airport()
    {
        return $this->belongsTo(Airport::class, 'airport_id', 'id');
    }
}
