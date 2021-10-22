<?php

namespace App\Http\Controllers;

use App\Models\Planes;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function registro(Request $request)
    {
        $fecha_actual = date('Y-m-d');
        $plan_free = Planes::find(1);

        $veri = User::where('email', $request->correo)->count();
        if($veri > 0){
            return response()->json(
                [
                    "error" => 100
                ]
                );
        }
        else{
            $user = new User();
            $user->name = $request->name;
            $user->last_name = $request->last_name;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->id_universidad = $request->id_universidad;

            $user->status = 1;
            $user->tipo_plan = 0;
            $user->plan_id = $plan_free->id;
            $user->fecha_inicio = date('Y-m-d');
            $user->id_carrera = $request->id_carrera;
            $user->fecha_fin = date("Y-m-d",strtotime($fecha_actual."+ ". $plan_free->duracion ." days"));
            $user->password = sha1($request->password);
            $user->save();

            return response()->json(
                [
                    "error" => false,
                    "user" => $user
                ]
            );
        }
    }

    public function login( Request $request )
    {
        $user = User::where('email', $request->email)->count();

        if($user > 0)
        {
            $user_veri = User::where('email', $request->email)->where('password', sha1($request->password))->count();
            if($user_veri > 0)
            {
                $user = User::where('email', $request->email)->get();

                return response()->json([
                    'error' => null,
                    'data' => $user
                ]);
            }
            else
            {
                return response()->json([
                    'error' => "Clave no coincide con el correo proporcionado",
                    'data' => null
                ]);
            }
        }
        else
        {
            return response()->json(
                [
                    'error' => "Correo no existe en nuestra Base de datos",
                    'data' => null
                ]
                );
        }
    }
}
