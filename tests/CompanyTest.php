<?php


namespace Briedis\Breezy\Tests;


class CompanyTest extends TestBase
{

    public function testAccessCompany()
    {
        $breezy = $this->breezy();

        $position = $breezy->getCompaniesWithPositions();

        // Dump if you wan't to
        // dump($position);
    }
}