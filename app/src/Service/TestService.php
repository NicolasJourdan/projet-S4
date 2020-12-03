<?php

namespace App\Service;

use NicolasJourdan\AwesomeBundle\Service\AwesomeService;

/**
 * Class TestService
 *
 * @package App\Service
 */
class TestService
{
    /** @var AwesomeService */
    private $service;

    /**
     * TestService constructor.
     *
     * @param AwesomeService $service
     */
    public function __construct(AwesomeService $service)
    {
        $this->service = $service;
    }

    /**
     * @return string
     */
    public function test(): string
    {
        return $this->service->test();
    }
}
