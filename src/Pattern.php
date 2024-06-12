<?php

declare(strict_types=1);

namespace PhpLlm\FabricPattern;

final class Pattern
{
    public function load(string $pattern): string
    {
        $path = $this->getPatternPath().'/'.$pattern.'/system.md';

        if (!file_exists($path)) {
            throw new \InvalidArgumentException('Pattern not found');
        }

        return file_get_contents($path);
    }

    private function getPatternPath(): string
    {
        $level = 1;
        do {
            $dir = dirname(__DIR__, $level);
        } while (!file_exists($dir.'/composer.json') && $level++ < 10);

        return $dir.'/vendor/danielmiessler/fabric/patterns';
    }
}
