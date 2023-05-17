<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Equipo;
use App\Models\Role;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $equipos = Equipo::all();
        return view('auth.register', compact('equipos'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'team_id' => 'required',
            'role' => 'required|in:Jugador,Entrenador',
        ]);

        $teams = Equipo::find($request->team_id);

        // Crear una instancia del modelo User y asignar los datos del formulario
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->equipos_id = $request->team_id;

        // Guardar el usuario en la base de datos


        // Verificar el rol seleccionado y asignar el rol correspondiente al usuario
        if ($request->input('role') == 'Entrenador') {
            $rolEntrenador = Role::where('nombre', 'Entrenador')->first();
            $user->roles()->attach($rolEntrenador);
        } elseif ($request->input('role') == 'Jugador') {
            $rolJugador = Role::where('nombre', 'Jugador')->first();
            $user->roles()->attach($rolJugador);
        }
        $user->save();
        return redirect('/login');
    }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('access_token')->accessToken;
            return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
                'user' => $user
            ]);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

}
