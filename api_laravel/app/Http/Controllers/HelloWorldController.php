<?php

namespace App\Http\Controllers;

// use App\Services\HelloWorldService;
use App\Services\HelloWorldService;
use Symfony\Component\HttpFoundation\JsonResponse;

class HelloWorldController extends Controller
{

    // Injete o HelloWorldService via construtor
    public function __construct(private readonly HelloWorldService $helloService) {}

    public function get(): JsonResponse
    {
        return response()->json($this->helloService->get());
    }
}
