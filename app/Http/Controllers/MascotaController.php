<?php

namespace App\Http\Controllers;
use App\Models\Mascota;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class MascotaController extends Controller
{
    public function mostrarForm(){
        return view('login');
    }
    
    public function logear(Request $request){
        if ($request->isMethod('post')){
            $nick = $request->input('nick');
            $password = $request->input('passwd');

            if (Mascota::where('nick', $nick)->where('password',$password)->exists()) {
                $request->session()->put('mascota', $nick);
                $sesion = $request->session()->get('mascota');
                return redirect()->route('paginaPrincipal', ['sesion' => $sesion ]);
            }
            else{
                 ?>
                <script>alert('Nombre de usuario o contraseña incorrectos')</script>
                <?php
                return view('login');
            }
        }
    }

    public function paginaPrincipal(Request $request){
        $nick = $request->sesion;
        $sexe = '';
        $raça = '';
        $mascota_logeada = Mascota::where('nick',$nick)->get();
        foreach($mascota_logeada as $masc){
            $sexe = $masc['sexe'];
            $raça = $masc['raça'];
        }

        $mascotas = DB::table("perros")
            ->where("raça", "=", $raça)
            ->where("sexe", "!=", $sexe)
            ->get();

        return view('parelles', ['nick' => $nick, 'mascotas' => $mascotas]);
    }

    public function formRegistrar(){
        return view('registrarMascota');
    }
    public function registrar(Request $request){
        if ($request->isMethod('post')){
            $nick = $request->input('nick');
            //Si existe la clave primaria
            if (Mascota::where('nick', $nick)->exists()) {
                ?><script>alert("¡Esta mascota ya esta registrada en el sistema!")</script><?php
                return view('login');
            }
            else{
                Mascota::create([
                    'nick' => request('nick'),
                    'password' => request('passwd'),
                    'nom' => request('nom'),
                    'raça' => request('raça'),
                    'sexe' => request('sexe'),
                    'edat' => request('edat'),
                    'color' => request('color'),
                    'nom_huma' => request('nom_huma'),
                    'telefon_huma' => request('telefon'),
                    'foto' => request('foto'),
                ]);

                ?>
                <script>alert("Se ha creado correctamente, ahora puedes logearte!")</script>
                <?php
                return redirect()->route('login');
            }
        }

    }

    public function mostrarFoto(Request $request){
        $nick = $request->nick;
        $mascotas = Mascota::where('nick',$nick)->get();
        return view('verFoto', ['mascotas' => $mascotas, 'nick' => $nick]);
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/');
    }
}
