<?php
namespace App\Tests\Service\Output;

use App\Service\Output\CSV;
use PHPUnit\Framework\TestCase;

class CSVTest extends TestCase
{
    public function testGenerateOutput()
    {
        $words = [
            'this' => 1,
            'is' => 1,
            'a' => 2,
            'test' => 2,
            'very' => 1,
            'good' => 1,
        ];

        $CSV = new CSV();
        $CSV->generateOutput($words);

        $outputFileDir = __DIR__ . '/../../../out/out.csv';
        $outputFileContent = file_get_contents($outputFileDir);

        $expectedFileContent =
            'this,1' . PHP_EOL .
            'is,1' . PHP_EOL .
            'a,2' . PHP_EOL .
            'test,2' . PHP_EOL .
            'very,1' . PHP_EOL .
            'good,1' . PHP_EOL;

        $this->assertEquals($expectedFileContent, $outputFileContent);
    }
}