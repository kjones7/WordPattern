<?php

namespace App\Service\Output;

class CSV implements Output
{
    public function generateOutput(array $words)
    {
        // Create output directory
        $outputDir = __DIR__ . '/../../../out';
        if (!file_exists($outputDir)) {
            mkdir ($outputDir, 0777);
        }

        file_put_contents($outputDir . '/out.csv', $this->generateContent($words));
    }

    private function generateContent(array $words)
    {
        $content = '';

        foreach ($words as $word => $count) {
            $content .= $word . ',' . $count . PHP_EOL;
        }

        return $content;
    }
}