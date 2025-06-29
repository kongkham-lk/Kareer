<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userAttr = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required','email','unique:users,email'],
            'password' => ['required','confirmed', Password::min(8)],
        ]);

        $employerAttr = $request->validate([
            'employer' => ['required', 'string', 'max:255'],
            'logo' => ['required', File::types(['jpeg','png','jpg'])],
        ]);

        // store in a storage folder then get the dir path (LOCALLY)
        // to make publicly access, go to .env -> FILESYSTEM_DISK=public
        $logoPath = "storage/".$request->logo->store('logos'); // it seems that "storage/" is needed to as a correct path

        $user = User::create($userAttr);
        $user->employer()->create([
            'name' => $employerAttr['employer'],
            'logo' => $logoPath,
        ]);

        Auth::login($user);
        redirect('/');
    }
}
