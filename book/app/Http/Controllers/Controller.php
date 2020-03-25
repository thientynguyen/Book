<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
//    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function response($data = null, $code = 200, $message = null)
    {
        $status = $code !== 200;
        $error = array();
        $error['status'] = $status;
        if ($status) {
            $error['code'] = $code;
            $error['message'] = $message;
        }
        return response()->json([
            'data' => $data,
            'error' => $error
        ], $code);
    }
}

