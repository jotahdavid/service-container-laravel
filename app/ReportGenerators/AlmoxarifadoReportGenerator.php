<?php

namespace App\ReportGenerators;

class AlmoxarifadoReportGenerator implements IReportGenerator
{
    public function generate(): string
    {
        return 'Relatório do Almoxarifado gerado com sucesso!';
    }
}
