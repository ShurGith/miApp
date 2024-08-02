<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
class ThemeController extends Controller
{
    public function switch($theme)
    {
        Session::put([
            'themeLocal' => $theme,
        ]);
        return Redirect::back();
    }
}
