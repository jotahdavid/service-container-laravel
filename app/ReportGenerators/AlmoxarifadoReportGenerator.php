<?php

namespace App\ReportGenerators;

class AlmoxarifadoReportGenerator implements IReportGenerator
{
    public function generate(): void
    {
       dd('Relatório do Almoxarifado gerado com sucesso!');
    }
}
