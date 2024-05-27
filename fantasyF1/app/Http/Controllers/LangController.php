<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    public function setLang($locale): \Illuminate\Http\RedirectResponse
    {
        App::setLocale($locale);
        Session::put("locale", $locale);
        return Redirect::back();
    }

}
