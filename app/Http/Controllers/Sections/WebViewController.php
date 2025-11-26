<?php

namespace App\Http\Controllers\Sections;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

class WebViewController extends Controller
{
    public function app_view()
    {
        return $this->pageView('App', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
        ]);
    }

    public function dashboard_view()
    {
        return $this->pageView('Pages/Dashboard');
    }

    public function home_view()
    {
        return $this->pageView('Pages/Home');
    }
}
