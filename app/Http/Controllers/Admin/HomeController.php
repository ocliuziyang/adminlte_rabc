<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin.auth');
    }
    //
    public function index () {

        $user = \Auth::user();
        return view('admin.index', compact('user'));
    }

}
