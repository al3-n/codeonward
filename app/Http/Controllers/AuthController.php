<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09.12.16
 * Time: 12:48
 */

namespace Code\Http\Controllers;

use Code\Models\User;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AuthController extends Controller
{
    public function getSignup()
    {
        return view('auth.signup');
    }

    public function postSignup(Request $request)
    {

        $this->validate($request, [
            'first_name' => 'required|max:100',
            'last_name' => 'required|max:100',
            'email' => 'required|unique:users|email|max:100',
            'username' => 'required|unique:users|alpha_dash|max:20',
            'birthday' => 'required|max:20',
            'password' => 'required|min:6|max:16',
            'phone' => 'required',
            'g-recaptcha-response'=>'required|captcha',
        ]);

        User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'birthday' => $request->input('birthday'),
            'password' => bcrypt($request->input('password')),
            'phone' => $request->input('phone')
        ]);

        return redirect()->route('home')->with('info', 'Вы успешно зарегистрировались, теперь можно войти');
    }

    public function getSignin()
    {
        return view('auth.signin');
    }

    public function postSignin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        if (!Auth::attempt($request->only(['username', 'password']), $request->has('remember'))) {
            return redirect()->back()->with('info', 'Не удалось войти');
        }

        return redirect()->route('home')->with('info', 'Вы успешно вошли');
    }

    public function getSignout()
    {
        Auth::logout();
        return redirect()->route('home')->with('info', 'Вы успешно вышли');
    }
}