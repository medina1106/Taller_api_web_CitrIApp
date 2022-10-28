<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class RegisterController extends Controller
{

    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */

    public function iniciar()
    {
        return view('Iniciar');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validar = Validator::make($request->all(), [
            'cedula' => 'required',
            'nombre' => 'required',
            'emailr' => 'required',
            'celular' => 'required',
            'password2' => 'required',
        ]);

        /*       User::Create([
            'cedula' => $request->cedula,
            'name'=> $request->nombre,
            'email'=>$request->email,
            'celular'=>$request->celular,
            'password'=>Hash::make($request->password2)
            ])->assignRole('user'); */

        if (!$validar->fails()) {
            $user = new User();
            $user->cedula = $request->cedula;
            $user->name = $request->nombre;
            $user->email = $request->emailr;
            $user->celular = $request->celular;
            $user->password = Hash::make($request->password2);
            $user->role = "agricultor";
            $user->save();

            /* event(new Registered($user)); */
            Auth::login($user);
            return redirect()->route('Home')->with('registro', 'true');
        } else {
            return redirect()->route('iniciar')->with('registro', 'false');
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeagr(Request $request)
    {

        $validar = Validator::make($request->all(), [
            'cedula' => 'required',
            'nombre' => 'required',
            'emailr' => 'required',
            'celular' => 'required',
            'password2' => 'required',
        ]);

        if (!$validar->fails()) {
            $user = new User();
            $user->cedula = $request->cedula;
            $user->name = $request->nombre;
            $user->email = $request->emailr;
            $user->celular = $request->celular;
            $user->password = Hash::make($request->password2);
            $user->role = "agricultor";
            $user->save();

            return redirect()->route('admin.register')->with('registroagr', 'true');
        } else {
            return redirect()->route('admin.register')->with('registroagr', 'false');
        }
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeadmin(Request $request)
    {

        $validar = Validator::make($request->all(), [
            'cedula' => 'required',
            'nombre' => 'required',
            'emailr' => 'required',
            'celular' => 'required',
            'password2' => 'required',
        ]);

        if (!$validar->fails()) {
            $user = new User();
            $user->cedula = $request->cedula;
            $user->name = $request->nombre;
            $user->email = $request->emailr;
            $user->celular = $request->celular;
            $user->password = Hash::make($request->password2);
            $user->role = "admin";
            $user->save();
            
            return redirect()->route('admin.register')->with('registroadmin', 'true');
        } else {
            return redirect()->route('admin.register')->with('registroadmin', 'false');
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sites  $sites
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $a = Auth::user()->id;
        $user = User::find($a);

        $user->name = $request->nombre;
        $user->email = $request->emailr;
        $user->celular = $request->celular;
        if ($request->password2 == '') {
            $user->password;
        } else {
            $user->password = Hash::make($request->password2);
        }
        $user->save();
        return redirect()->route('agricultor.Perfil')->with('editar', 'true');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
