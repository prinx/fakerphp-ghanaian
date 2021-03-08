<?php

namespace Faker\Test\Ghanaian;


use Faker\Ghanaian\Municipality;
use PHPUnit\Framework\TestCase;

final class MunicipalityTest extends TestCase
{
    public function testGenerate()
    {
        $ext = new Municipality();
        self::assertNotEmpty($ext->municipality());
    }
}
