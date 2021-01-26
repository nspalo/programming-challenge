<?php

namespace Brackets;

/**
 * Class Bracket
 * @package Brackets
 */
class Bracket
{
    /**
     * @param string $string
     * @return bool
     */
    public function solution($string = ""): bool
    {
        $isProperlyNested = 0 === ($elements = strlen($string));

        if (0 === ($elements % 2)) {

            $bracketStacks = [];
            $bracketPairs = [
                "(" => ")",
                "[" => "]",
                "{" => "}",
                ")" => "(",
                "]" => "[",
                "}" => "{"
            ];

            for ($index = 0; $index < $elements; $index++) {
                $currentElement = $string[$index];

                if (empty($bracketStacks)) {

                    $bracketStacks[] = $currentElement;
                    $isProperlyNested = false;

                } else {

                    $lastInserted = $bracketStacks[count($bracketStacks) - 1];

                    if (strcmp($currentElement, $bracketPairs[$lastInserted]) === 0) {

                        array_pop($bracketStacks);
                        $isProperlyNested = true;

                    } else {

                        $bracketStacks[] = $currentElement;
                        $isProperlyNested = false;

                    }
                }
            }
        }

        return $isProperlyNested;
    }
}