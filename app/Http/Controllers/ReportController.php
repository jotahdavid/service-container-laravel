<?php

namespace App\Http\Controllers;

use App\ReportGenerators\ReportGeneratorFactory;
use Illuminate\Http\JsonResponse;

class ReportController extends Controller
{
    public function __construct(
        protected ReportGeneratorFactory $reportGeneratorFactory
    ) {}

    public function generate(string $type): JsonResponse
    {
        try {
            $reportGenerator = $this->reportGeneratorFactory->create($type);

            return response()->json([
                'message' => $reportGenerator->generate(),
            ]);
        } catch (\InvalidArgumentException $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 422);
        }
    }
}
