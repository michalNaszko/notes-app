<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\SignInRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Note;


class SignInController extends Controller
{
    /**
     * Display login page.
     * 
     * @return Renderable
     */
    public function show()
    {
        return view('signIn');
    }

    /**
     * Handle account login request
     * 
     * @param SignInRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function signIn(SignInRequest $request)
    {
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)):
            return redirect()->to('/')
                ->withErrors(trans('auth.failed'));
        endif;

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    /**
     * Handle response after user authenticated
     * 
     * @param Request $request
     * @param Auth $user
     * 
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $user) 
    {
        return redirect('/notes');
    }
}
