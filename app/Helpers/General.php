<?php

namespace App\Helpers;

class General
{
    /**
     * @param string $message
     * @param array $data
     * @param int $code
     * @param string $status
     * @param string $title
     * @return \Illuminate\Http\JsonResponse
     */
    public static function responseJsonSuccess($data = [], $message = "OK", $code = 200, $status = "success", $title = "")
    {
        $response = [
            "program" => env('API_SUBTYPE'),
            "version" => env('API_VERSION'),
            "release" => env('API_RELEASE'),
            "datetime" => date("Y-m-d H:i:s"),
            "status" => $status,
            "code" => $code,
            "message" => $message,
            "title" => $title,
            "data" => $data
        ];
        return response()->json($response, $code);
    }


    /**
     * @param string $message
     * @param array $data
     * @param int $code
     * @param string $status
     * @param string $title
     * @return \Illuminate\Http\JsonResponse
     */
    public static function responseJsonError($data = [], $message = "ERROR", $code = 400, $status = "error", $title = "")
    {
        $response = [
            "program" => env('API_SUBTYPE'),
            "version" => env('API_VERSION'),
            "release" => env('API_RELEASE'),
            "datetime" => date("Y-m-d H:i:s"),
            "status" => $status,
            "code" => $code,
            "message" => $message,
            "title" => $title,
            "data" => $data
        ];
        return response()->json($response, $code);
    }
}