<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Parrainage; 
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
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', Rules\Password::defaults()],
            'numero' => ['required', 'string', 'max:20'],  // Validation du champ numéro
            'id_parrain' => ['nullable', 'exists:users,id'],
        ]);

       

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>$request->password,
            'numero' => $request->numero,  // Ajout du numéro
        ]);


          // Gestion de l'enregistrement du parrain
        if ($request->filled('id_parrain')) {
            Parrainage::create([
                'id_parrain' => $request->id_parrain, // ID du parrain
                'id_filleul' => $user->id, // ID de l'utilisateur nouvellement créé
                'date_parrainage' => now(), // Date actuelle
                'points_de_fidelites' => 0, // Valeur par défaut
            ]);
        }

        event(new Registered($user));

        Auth::login($user);
        if ($request->expectsJson()) {
            return response()->json(['message' => 'Inscription réussie', 'user' => $user], 201);
        }

        return redirect(route('dashboard', absolute: false));
    }
}
