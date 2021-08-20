<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function responseSuccess($message, $data)
    {
    	$response = [
            'success' => true,
            'data'    => $data,
            'message' => $message,
        ];

        return response()->json($response, 200);
    }


    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function responseError($message, $data = [], $code = 404)
    {
    	$response = [
            'success' => false,
            'data'    => $data,
            'message' => $message,
        ];

        return response()->json($response, $code);
    }
}
