<?php

namespace App\Controller;

use App\Service\TestService;
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
     * @param TestService $testService
     *
     * @return Response
     */
    public function test(TestService $testService): Response
    {
        return new JsonResponse(['message' => $testService->test()]);
    }
}
