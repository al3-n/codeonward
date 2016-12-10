<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10.12.16
 * Time: 14:38
 */

namespace Code\Http\Controllers;


class ContactController extends Controller
{
    public function show()
    {
        return view('contacts');
    }
}