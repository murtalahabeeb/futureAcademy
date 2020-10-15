<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index() {
        return view('pages.index');
    }

    function training_session() {
        return view('pages.training-session');
    }


    function aboutus() {
        return view('pages.aboutus');
    }


    function profile() {
        return view('pages.profile');
    }
}
