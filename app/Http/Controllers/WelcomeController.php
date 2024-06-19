<?php

namespace App\Http\Controllers;

use Auth;
use DB;


use Illuminate\Http\Request;
use Mail;
use App\Mail\MessageSoporteC;

use Illuminate\Support\Facades\Validator;

class WelcomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
  
        return view('welcome');
    }

    public function envioCorreo(Request $request)
    {
        $mensaje = $request;

        if ($request->ajax())
        {

            $validator = Validator::make($request->all(), [
                'nombre' => ['required'],
                'correo' => ['required'],
                'telefono' => ['required'],
                'comentario' => ['required'],
            ], [
                'nombre.required' => 'Nombre invalido!',
                'correo.required' => 'Correo Electronico invalido!',
                'telefono.required' => 'Contacto movil invalido!',
                'comentario.required' => 'Comentario invalido!',

            ]);

            if ($validator->fails()){
                return response()->json(['errors'=>$validator->errors()->all()]);
            }

            Mail::to('i.arbona@misena.edu.co')->send(new MessageSoporteC($mensaje));
            return response()->json(['success'=>'Informacíon enviada correctamente']);
        }
    }
}
