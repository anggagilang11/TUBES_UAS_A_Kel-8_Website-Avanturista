<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function responseSuccess($data)
    {
        return response()->json([
            'status' => 200,
            'data' => $data
        ],200);
    }

    protected function responseFailed($data)
    {
        return response()->json([
            'status' => 400,
            'data' => $data
        ],400);
    }
}
