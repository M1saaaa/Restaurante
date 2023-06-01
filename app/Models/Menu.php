<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pedido;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'precio',
        'tipo'
    ];

    public function pedido_menu()
{
    return $this->manyMany(Pedido::class);
}

}
