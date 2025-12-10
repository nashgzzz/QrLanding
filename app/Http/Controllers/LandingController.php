<?php

namespace App\Http\Controllers;

use App\Mail\QrRegistroMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing');
    }
    
     public function store(Request $request)
    {
        $data = $request->validate([
            'rut' => 'required',
            'nombre' => 'required',
            'correo' => 'required|email',
            'telefono' => 'required'
        ]);

        // ENVIAR CORREO
        Mail::to('soporte@bsbspa.cl')->send(new QrRegistroMail($data));

        // return back()->with('success', 'Gracias, tus datos fueron enviados correctamente.');
        alert()->success('Registro Exitoso', 'Tus datos fueron enviados correctamente.');
        return back();
    }
}
