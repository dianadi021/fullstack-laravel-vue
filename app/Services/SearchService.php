<?php

namespace App\Services;

use App\Repositories\Master\RegionInterface;
use Illuminate\Http\Request;

class SearchService
{
    private RegionInterface $regionsRepos;

    public function __construct() {}

    public function getRegions(Request $request)
    {
        return $this->regionsRepos->getRegions($request);
    }
}
