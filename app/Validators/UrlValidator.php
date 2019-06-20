<?php

namespace App\Validators;

class UrlValidator
{
    /**
     * @param $data
     * @return mixed
     */
    public static function indexValidator($data)
    {
        $rules = [
            'limit' => 'required|integer|min:100|max:200'
        ];

        $validator = \Validator::make($data, $rules);
        return $validator;
    }

    /**
     * @param $data
     * @return mixed
     */
    public static function storeValidator($data)
    {
        $rules = [
            'url' => 'required|string|max:255|url',
            'title' => 'required|string|max:255'
        ];

        $validator = \Validator::make($data, $rules);
        return $validator;
    }

    /**
     * @param $data
     * @return mixed
     */
    public static function showValidator($data)
    {
        $rules = [
            'code' => 'required|string|exists:urls,code'
        ];

        $validator = \Validator::make($data, $rules);
        return $validator;
    }
}