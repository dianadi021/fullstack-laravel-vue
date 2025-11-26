<?php

namespace App\Repositories\Master;

use App\Models\Master\Region;
use Illuminate\Http\Request;

class RegionRepository implements RegionInterface
{
    public function getRegions(Request $request): array
    {
        return Region::find()->toArray();
    }
}
