<?php

namespace App\Helpers;

class ApiDocs
{ 
    /**
     * Api\v1\UrlController
     * index()
     * @apiDescription Urls List
     * @api {get} {url}/api/v1/urls Urls List
     * @apiVersion 1.0.0
     * @apiName Urls List
     * @apiGroup Url
     *
     * @apiParam {String} [limit]              Top limit. <code>100</code>
     *
     * @apiSuccessExample Url-Example:
     * {url}/api/v1/urls?limit=100
     *
     * @apiSuccessExample Success-Response:
     * HTTP/1.1 200 OK
     * {
     *     "program": "MyShortener",
     *     "version": "v1.0.0",
     *     "release": "1",
     *     "datetime": "2019-06-20 00:19:50",
     *     "status": "success",
     *     "code": 200,
     *     "message": "OK",
     *     "title": "",
     *     "data": [
     *         {
     *             "id": 1,
     *             "url": "https://www.google.com",
     *             "code": "oNs62oWY",
     *             "title": "Google",
     *             "visited_count": 2,
     *             "shorten_url": "http://myshortener.test/oNs62oWY",
     *             "created_at": "2019-06-19T23:55:36.000000Z",
     *             "updated_at": "2019-06-20T00:07:15.000000Z"
     *         }
     *     ]
     * }
     *
     * @apiSuccessExample Error-Response:
     *  HTTP/1.1 400 Bad Request
     * {
     *      "program": "MyShortener",
     *      "version": "v1.0.0",
     *      "release": "1",
     *      "datetime": "2019-06-20 00:19:50",
     *      "status": "error",
     *      "code": 400,
     *      "message": "The limit is required",
     *      "title": "ValidationFailed",
     *      "data": []
     * }
     *
     */

    /**
     * Api\v1\UrlController
     * store()
     * @apiDescription Store Url
     * @api {post} {url}/api/v1/urls Store Url
     * @apiVersion 1.0.0
     * @apiName Store Url
     * @apiGroup Url
     *
     * @apiParam {String} url              Url. <label class="label label-warning">required</label>
     * @apiParam {String} title            Url Title. <label class="label label-warning">required</label>
     *
     * @apiSuccessExample Json-Example:
     *  Content-Type: application/json
     *  {
     *    "url": "https://www.google.com/",
     *    "title": "Google"
     *  }
     *
     * @apiSuccessExample Success-Response:
     * HTTP/1.1 200 OK
     * {
     *     "program": "MyShortener",
     *     "version": "v1.0.0",
     *     "release": "1",
     *     "datetime": "2019-06-20 00:19:50",
     *     "status": "success",
     *     "code": 200,
     *     "message": "OK",
     *     "title": "",
     *     "data": {
     *             "id": 1,
     *             "url": "https://www.google.com",
     *             "code": "oNs62oWY",
     *             "title": "Google",
     *             "visited_count": 0,
     *             "shorten_url": "http://myshortener.test/oNs62oWY",
     *             "created_at": "2019-06-19T23:55:36.000000Z",
     *             "updated_at": "2019-06-20T00:07:15.000000Z"
     *      }
     * }
     *
     * @apiSuccessExample Error-Response:
     *  HTTP/1.1 400 Bad Request
     * {
     *      "program": "MyShortener",
     *      "version": "v1.0.0",
     *      "release": "1",
     *      "datetime": "2019-06-20 00:19:50",
     *      "status": "error",
     *      "code": 400,
     *      "message": "The title is required",
     *      "title": "ValidationFailed",
     *      "data": []
     * }
     *
     */

    /**
     * Api\v1\UrlController
     * show()
     * @apiDescription Redirect Url
     * @api {get} {url}/{code} Redirect Url
     * @apiVersion 1.0.0
     * @apiName Redirect Url
     * @apiGroup Url
     *
     * @apiParam {String} code              Url Code. <label class="label label-warning">required</label>
     *
     * @apiSuccessExample Url-Example:
     * {url}/oNs62oWY
     *
     * @apiSuccessExample Success-Response:
     * HTTP/1.1 200 OK
     * Url Redirected
     *
     * @apiSuccessExample Error-Response:
     *  HTTP/1.1 400 Bad Request
     * {
     *      "program": "MyShortener",
     *      "version": "v1.0.0",
     *      "release": "1",
     *      "datetime": "2019-06-20 00:19:50",
     *      "status": "error",
     *      "code": 400,
     *      "message": "The selected code is invalid",
     *      "title": "ValidationFailed",
     *      "data": []
     * }
     *
     */
}