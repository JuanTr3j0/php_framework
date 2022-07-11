<?php

namespace App\Http\Controllers;
use App\Models\Clientes;
use App\Models\Telefono;
use App\Models\User;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function crearPedido(Request $request){
        try {
            //code...
            $validator = Validator::make($request->all(),[
                'nombre' => 'required|string|max:255|unique:umm,nombre'.(!is_null($request->id) ? ','.$request->id : null),
                'logo' => ['required','max:100','string']
            ]);
            
            if($validator->fails())
            {
                return response()->json([422,'error'=>$validator->errors()->all()]);
            }
            
        } catch (\Throwable $th) {
            //throw $th;
        }
        
    }
}
