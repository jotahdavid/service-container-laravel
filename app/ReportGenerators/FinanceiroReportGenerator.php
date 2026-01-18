<?php

namespace App\ReportGenerators;

use App\Repositories\UserRepository\IUserRepository;

class FinanceiroReportGenerator implements IReportGenerator
{
    public function __construct(
        protected IUserRepository $userRepository
    ) {}

    public function generate(): string
    {
        return 'Relatório Financeiro gerado com sucesso!';
    }
}
