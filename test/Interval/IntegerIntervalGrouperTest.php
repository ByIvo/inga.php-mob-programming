<?php

namespace Test\IngaPhp\Interval;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;
use IngaPhp\Interval\IntegerIntervalGrouper;

class IntegerIntervalGrouperTest extends TestCase {

  private $integerIntervalGrouper;

  /** @before */
  public function initialize(): void {
    $this->integerIntervalGrouper = new IntegerIntervalGrouper();
  }

  public function provideSequences(): iterable {
    yield 'single number'             => [[150]                               , '[150]'];
    yield 'two numbers sequence'      => [[150, 151]                          , '[150-151]'];
    yield 'three numbers sequence'    => [[150, 151, 152]                     , '[150-152]'];
    yield 'different group sequences' => [[115, 150, 151, 152]                , '[115], [150-152]'];
    yield 'many sequences'            => [[115, 116, 117, 150, 151, 152, 160] , '[115-117], [150-152], [160]'];
    yield 'starting with negative'    => [[-1, 0, 1]                      , '[-1-1]'];
  }

  /** @dataProvider provideSequences */
  public function test_shouldGroupSequences(array $input, string $expectedGroupedResult): void {
    $groupedResult = $this->integerIntervalGrouper->group($input);

		Assert::assertEquals($expectedGroupedResult, $groupedResult);
	}
}
