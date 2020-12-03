<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class IndexController
 *
 * @package App\Controller
 */
class IndexController
{
    /**
     * @Route("/test", name="app_test")
     *
     * @return Response
     */
    public function test(): Response
    {
        return new JsonResponse(['message' => "ok"]);
    }
}
