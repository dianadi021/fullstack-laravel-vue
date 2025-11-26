<?php

namespace App\Http\Controllers;

use App\Traits\HttpTraits;

abstract class Controller
{
    use HttpTraits;

    private string $pathView = '';

    protected const PATH_AUTH_VIEW = 'Pages/Auth';

    protected const PATH_PROFILE_VIEW = 'Pages/Profile';

    public function __construct() {}

    protected function setPathView(string $path = '')
    {
        $this->pathView = $path;
    }

    protected function pageView(string $component, array $datas = [])
    {
        $tmpView = (isValNotEmpty($this->pathView) ? "{$this->pathView}/{$component}" : "{$component}");

        return self::viewInertia($tmpView, $datas);
    }
}
