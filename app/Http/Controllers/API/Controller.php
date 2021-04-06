<?php


namespace App\Http\Controllers\API;

/**
 * @OA\Info(
 *     title="News API documentation",
 *     version="1.0.0",
 *     @OA\Contact(
 *      email="bekanur98@gmail.com"
 *     ),
 *     @OA\License(
 *      name="Apache 2.0",
 *      url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 * @OA\Tag(
 *     name="User",
 *     description="Authorization and accounting endpoints",
 *     @OA\ExternalDocumentation(
 *          description="Find out more about",
 *          url="http://swagger.io"
 *     )
 * )
 *
 * @OA\Tag(
 *     name="News",
 *     description="News endpoints",
 *     @OA\ExternalDocumentation(
 *          description="Find out more about",
 *          url="http://swagger.io"
 *     )
 * )
 *
 * @OA\Server(
 *     description="Laravel news API server",
 *     url="https://localhost/api/"
 * )
 * @OA\SecurityScheme(
 *     type="apiKey",
 *     in="header",
 *     name="X-APP-ID",
 *     securityScheme="X-APP-ID"
 * )
 */

class Controller extends \App\Http\Controllers\Controller
{

}
