<?php

namespace App\ReportGenerators;

use App\Repositories\UserRepository\IUserRepository;

class ReportGeneratorFactory
{
    public function __construct(protected IUserRepository $userRepository) { }

    public function create(string $type): IReportGenerator
    {
        dd($this->userRepository);

        if ($type === 'financeiro') {
            return app(FinanceiroReportGenerator::class);
        }

        if ($type === 'almoxarifado') {
            return new AlmoxarifadoReportGenerator();
        }

        throw new \InvalidArgumentException("Tipo de relatório desconhecido: $type");
    }
}
