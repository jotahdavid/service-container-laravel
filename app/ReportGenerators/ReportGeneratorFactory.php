<?php

namespace App\ReportGenerators;

use App\Repositories\UserRepository\IUserRepository;

class ReportGeneratorFactory
{
    public function __construct(protected IUserRepository $userRepository) {}

    /**
     * @throws \InvalidArgumentException
     */
    public function create(string $type): IReportGenerator
    {
        if ($type === 'financeiro') {
            /**
             * Note: Using the service container to resolve the FinanceiroReportGenerator
             * ensures that its dependencies are properly injected.
             */
            return app(FinanceiroReportGenerator::class);
        }

        if ($type === 'almoxarifado') {
            return new AlmoxarifadoReportGenerator();
        }

        throw new \InvalidArgumentException("Tipo de relatório desconhecido: $type");
    }
}
