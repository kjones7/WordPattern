<?php
namespace App\Service\Output;

interface Output {
    /**
     * Generates the output to be used to see the results of the word count.
     * @param array $words
     * @return mixed
     */
    public function generateOutput(array $words);
}