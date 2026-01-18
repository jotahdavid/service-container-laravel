<?php

namespace App\ReportGenerators;

interface IReportGenerator
{
    public function generate(): void;
}
