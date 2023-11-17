<?php

namespace Sakac\Inspire\Controllers;

use OpenApi\Attributes\Get;
use OpenApi\Attributes\Response;
use Sakac\Inspire\Inspire;

class InspirationController
{
    #[Get(
        path: '/api/v1/inspire',
        summary: 'Get user data',
        tags: [
            'Inspire',
        ],
        responses: [
            new Response(
                response: 200,
                description: 'Success page',
            ),
            new Response(
                response: 400,
                description: 'Bad Request',
            ),
            new Response(
                response: 401,
                description: 'Unauthorized',
            ),
            new Response(
                response: 404,
                description: 'Not found',
            ),
        ],
    )]
    public function __invoke(Inspire $inspire): string
    {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
}
