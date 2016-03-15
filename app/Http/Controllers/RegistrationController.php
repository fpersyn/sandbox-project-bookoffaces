<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RegistrationController extends Controller
{

    /**
     * Show a form to register the user.
     * 
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('registration.create');
    }

    /**
     * Show a form to register the user.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
//        return 'creating new user';

        return redirect('welcome');
    }
}
