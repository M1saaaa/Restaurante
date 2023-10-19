<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mesa;
use App\Models\Reserva;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\User;

class ReservaController extends Controller
{
    public function index(){
        $reservas=Reserva::get();//Esto trae todas las reservas
        return view('reservas.create',compact('reservas'));
    }

    public function create(){
        $mesas=Mesa::where('estado',false)->get();
        $usuarios=User::get();
        return view('reservas.create',compact('mesas','usuarios'));
    }

    public function store(Request $request){
        $datos=$request->all();
        $datos['estado']=true;
        Reserva::created($datos);
        return redirect('reservas.index');
    }
}
