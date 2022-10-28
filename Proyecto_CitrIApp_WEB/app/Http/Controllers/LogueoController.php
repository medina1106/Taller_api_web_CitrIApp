<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Contracts\Role;

class LogueoController extends Controller
{
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {


    /* $credentials = request()->only('email', 'password');

   if (Auth::attempt($credentials)) {
      // Regenera la sesion para evitar ataques y robo de identidades 
>>>>>>> España
      request()->session()->regenerate();
      return redirect()->route('Home')->with('iniciar', 'true');
      
    } else {
      return redirect()->route('iniciar')->with('iniciar', 'false');



    } */

    if (auth()->attempt(request(['email', 'password'])) == false) {
      return back()->with('iniciar', 'false');
    } else {

      if (auth()->user()->role == 'admin') {
        request()->session()->regenerate();
        return redirect()->route('Admin_H')->with('iniciar', 'true');
      } else {

        if (auth()->user()->role == 'agricultor') {
          request()->session()->regenerate();
          return redirect()->route('Home')->with('iniciar', 'true');
        }
      }

    }
  }
}
