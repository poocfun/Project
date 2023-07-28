<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('log');
    }

    public function login(Request $request)
    {
        try {
            // Retrieve the credentials from the request
            $credentials = $request->only('email', 'password');

            // Attempt to authenticate the user
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                if ($user->level == 'admin') {
                    return redirect('/administrator');
                } else {
                    return redirect('/monitor');
                }
            }
            throw ValidationException::withMessages([
                'email' => 'Invalid email or password',
            ]);
        } catch (ValidationException $exception) {
            return redirect()->back()->withInput()->with('error', $exception->getMessage());
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/log-in')->with('success', 'Logout successful!');
    }

    public function register(Request $request)
    {
         // Validate the input
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|unique:users|max:255',
        'password' => 'required|string',
    ]);

    // Create a new user
    $user = User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'password' => Hash::make($validatedData['password']),
        'level'=> 'user'
    ]);
    return redirect('/log-in')->with('success', 'Registration successful!');
    }

}
