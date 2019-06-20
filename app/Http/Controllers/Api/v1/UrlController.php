<?php

namespace App\Http\Controllers\Api\v1;

use App\Url;
use App\Helpers\General;
use Illuminate\Http\Request;
use App\Validators\UrlValidator;
use App\Http\Controllers\Controller;
use App\Http\Resources\Url as UrlResource;
use App\Http\Resources\Urls as UrlResourceCollection;

class UrlController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(!$request->has('limit')) {
            $request->merge(['limit' => env('TOP_LIMIT', 100)]);
        }
        $data = $request->all();
        $validator = UrlValidator::indexValidator($data);
        if ($validator->fails()) {
            return General::responseJsonError([], $validator->messages()->first(), 400, "error", "ValidationFailed");
        }
        $urls = Url::orderBy('visited_count', 'desc')->limit($data['limit'])->get();
        return General::responseJsonSuccess(new UrlResourceCollection($urls));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validator = UrlValidator::storeValidator($data);
        if ($validator->fails()) {
            return General::responseJsonError([], $validator->messages()->first(), 400, "error", "ValidationFailed");
        }
        $params = ['title' => $data['title'], 'code' => \Str::random(env('CODE_LENGTH', 8))];
        try {
            $url = Url::firstOrCreate(
                ['url' => rtrim($data['url'],'/')],
                $params
            );
            return General::responseJsonSuccess(new UrlResource($url));
        } catch (\Exception $e) {
            return General::responseJsonError([], $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $code
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $code)
    {
        $request->merge(['code' => $code]);
        $data = $request->all();
        $validator = UrlValidator::showValidator($data);
        if ($validator->fails()) {
            return General::responseJsonError([], $validator->messages()->first(), 400, "error", "ValidationFailed");
        }
        $url = Url::whereCode($data['code'])->first();
        $url->increment('visited_count');
        return redirect()->away($url->url);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
