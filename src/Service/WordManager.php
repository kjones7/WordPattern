<?php
namespace App\Service;

class WordManager
{
    public function getWordCount(string $input) : array
    {
        // Only keep numbers and letters
        $input = preg_replace('/(?!asp.net)[^a-z\d ]+\/i', '', $input);

        // Make all lowercase
        $input = strtolower($input);

        // explode using space as separator
        $words = explode(' ', $input);

        // loop through array, keeping track of string counts
        $wordCount = [];
        foreach ($words as $word) {
            if (empty($wordCount[$word])) {
                $wordCount[$word] = 0;
            }

            $wordCount[$word] += 1;
        }

        return $wordCount;
    }
}