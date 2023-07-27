<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\SignUpRequest;

class SignUpController extends Controller
{
    /**
     * Display sign up page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('signUp');
    }

    /**
     * Handle account sign up request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function signup(SignUpRequest $request) 
    {
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $user = User::create(request(['email', 'password']));
        
        auth()->login($user);
        
        return redirect()->to('notes');
    }
}
