<?php

declare(strict_types=1);

use PhpLlm\FabricPattern\Pattern;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(Pattern::class)]
final class PatternTest extends TestCase
{
    public function testLoad(): void
    {
        $expected = dirname(__DIR__) . '/vendor/danielmiessler/fabric/patterns/agility_story/system.md';
        $actual = (new Pattern())->load('agility_story');

        self::assertStringEqualsFile($expected, $actual);
    }
}
