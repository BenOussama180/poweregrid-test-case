<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'project_name'];

    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }
    public function linksOrders()
    {
        return $this->morphedByMany(Order::class, 'projectable');
    }
}
