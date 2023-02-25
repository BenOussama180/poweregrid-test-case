<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'product',
        'quantity',
        'total',
    ];
    public function projects()
    {
        return $this->morphToMany(Project::class, 'projectable');
    }
    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }
}
