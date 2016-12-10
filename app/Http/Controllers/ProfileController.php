<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09.12.16
 * Time: 15:51
 */

namespace Code\Http\Controllers;

use Code\Models\User;
use Illuminate\Http\Request;
use Auth;
use Image;
class ProfileController extends Controller
{
    public function getProfile($username)
    {
        $user = User::where('username', $username)->first();
        if (!$user) {
            abort(404);
        }
        return view('profile.index', ['user' => $user])
            ->with('user', $user);
    }

    public function getEdit()
    {
        return view('profile.edit');
    }

    public function postEdit(Request $request)
    {

        $this->validate($request, [
            'first_name' => 'required|max:100',
            'last_name' => 'required|max:100',
            'email' => 'required|max:100|email|unique:users,email,' . Auth::user()->id,
            'username' => 'required|alpha_dash|max:20|unique:users,username,' . Auth::user()->id,
            'birthday' => 'required|max:20',
            'phone' => 'required',
            'captcha' => 'required|min:1'
        ]);

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . "." . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(100, 100)->save(public_path('/upload/avatars/' . $filename));
            Auth::user()->avatar = $filename;
            Auth::user()->save();

            return redirect()->route('profile.edit')->with('info', 'Вы успешно обновили профиль');
        }

        Auth::user()->update([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'birthday' => $request->input('birthday'),
            'phone' => $request->input('phone')
        ]);

        return redirect()->route('profile.edit')->with('info', 'Вы успешно обновили профиль');
    }
}