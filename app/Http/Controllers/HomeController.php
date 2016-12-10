<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 08.12.16
 * Time: 23:23
 */

namespace Code\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}