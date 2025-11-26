<?php

namespace App\Http\Controllers\Sections;

use App\Http\Controllers\Controller;
use App\Services\SearchService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __construct(private SearchService $service) {}

    public function getRegions(Request $request): JsonResponse
    {
        try {
            $datas = $this->service->getRegions($request);

            return $this->apiJsonResponse(200, 'Data berhasil diambil', $datas);
        } catch (Exception $err) {
            return $this->apiJsonResponse($err->getCode(), 'Data gagal diambil', $err->getMessage());
        }
    }
}
