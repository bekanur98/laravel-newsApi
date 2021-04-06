<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NewsController extends Controller{

    /**
     * @OA\Get(
     *     path="/news",
     *     operationId="newsAll",
     *     tags={"News"},
     *     summary="Get all news with pagination",
     *     @OA\Parameter(
     *          name="page",
     *          in="query",
     *          description="The page number",
     *          required=false,
     *          @OA\Schema(
     *              type="integer",
     *          )
     *     ),
     *     @OA\Parameter(
     *          name="source_id",
     *          in="query",
     *          description="Singe of few comma separated unique IDs of sources",
     *          example="2, 5, 3",
     *          required=false,
     *          @OA\Schema(
     *              type="string",
     *          )
     *     ),
     *     @OA\Response(
     *          response="200",
     *          description="Successful operation",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                  @OA\Property(
     *                      property="current_page",
     *                      type="integer",
     *                      example=3
     *                  ),
     *                  @OA\Property(
     *                      property="first_page_url",
     *                      type="string",
     *                      example="https://api.newsapi.news/api/v2/news?page=1"
     *                  ),
     *                  @OA\Property(
     *                      property="from",
     *                      type="integer",
     *                      example=201
     *                  ),
     *                  @OA\Property(
     *                      property="last_page",
     *                      type="integer",
     *                      example=12
     *                  ),
     *                  @OA\Property(
     *                      property="last_page_url",
     *                      type="string",
     *                      example="https://api.newsapi.news/api/v2/news?page=12"
     *                  ),
     *                  @OA\Property(
     *                      property="next_page_url",
     *                      type="string",
     *                      example="https://api.newsapi.news/api/v2/news?page=4"
     *                  ),
     *                  @OA\Property(
     *                      property="path",
     *                      type="string",
     *                      example="https://api.newsapi.news/api/v2/news"
     *                  ),
     *                  @OA\Property(
     *                      property="per_page",
     *                      type="integer",
     *                      example=50
     *                  ),
     *                  @OA\Property(
     *                      property="prev_page_url",
     *                      type="string",
     *                      example="https://api.newsapi.news/api/v2/news?page=3"
     *                  ),
     *                  @OA\Property(
     *                      property="to",
     *                      type="integer",
     *                      example=300
     *                  ),
     *                  @OA\Property(
     *                      property="total",
     *                      type="integer",
     *                      example=1234
     *                  ),
     *              )
     *          )
     *     ),
     *     @OA\Response(
     *      response="503",
     *      description="News could not be loaded"
     *     )
     * )
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request):JsonResponse
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
