<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Pedido extends Model
{
    use HasFactory;
    protected $fillable = [
        'fecha',
        'hora'
    ];

    public function users_pedido()
{
    return $this->manyMany(User::class);
}
}
