<?php

namespace App\Repositories\Master;

use Illuminate\Http\Request;

interface RegionInterface
{
    public function getRegions(Request $request): array;
}
