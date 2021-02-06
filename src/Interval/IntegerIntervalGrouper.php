<?php

namespace IngaPhp\Interval;

class IntegerIntervalGrouper {

  public function group(array $input): string {
    $sequencesGroup = $this->groupInputIntoSequences($input);

    $results = [];
    foreach($sequencesGroup as $sequence) {
      $results[] = $this->shrinkSequence($sequence);
    }

    return implode(', ', $results);
  }

  private function groupInputIntoSequences(array $input): array {
    $inputGroupedBySequences = [];
    $lastValue = -1;

    foreach ($input as $value) {

      if ($value === ($lastValue + 1)) {
        $lastKey = array_key_last($inputGroupedBySequences);
        $inputGroupedBySequences[$lastKey][] = $value;
      } else {
        $inputGroupedBySequences[] = [$value];
      }

      $lastValue = $value;
    }

    return $inputGroupedBySequences;
  }

  private function shrinkSequence(array $allIntegersFromSequence): string {
    if (count($allIntegersFromSequence) === 1) {
      $result = $allIntegersFromSequence[0];
    } else {
      $first_element = array_shift($allIntegersFromSequence);
      $last_element = array_pop($allIntegersFromSequence);

      $result = "{$first_element}-{$last_element}";
    }

    return "[{$result}]";
  }

}
