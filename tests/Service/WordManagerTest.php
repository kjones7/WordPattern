<?php
namespace App\Tests\Service;

use App\Service\WordManager;
use PHPUnit\Framework\TestCase;

class WordManagerTest extends TestCase
{
    public function test_GetWordCount_ExcludePeriods()
    {
        $input = 'This is a test. A very good test.';
        $wordManager = new WordManager();
        $wordCount = $wordManager->getWordCount($input);

        $expectedOutput = [
            'this' => 1,
            'is' => 1,
            'a' => 2,
            'test' => 2,
            'very' => 1,
            'good' => 1,
        ];
        $this->assertEquals($expectedOutput, $wordCount);
    }

    public function test_GetWordCount_IncludePhrase()
    {
        $input = 'ASP.NET should be included';
        $wordManager = new WordManager();
        $wordCount = $wordManager->getWordCount($input);

        $expectedOutput = [
            'ASP.NET' => 1,
            'should' => 1,
            'be' => 1,
            'included' => 1,
        ];
        $this->assertEquals($expectedOutput, $wordCount);
    }
}