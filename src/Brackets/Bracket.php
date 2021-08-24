<?php

declare(strict_types=1);

namespace ProgrammingChallenge\Brackets;

/**
 * Class Bracket
 * @package Brackets
 */
final class Bracket
{
    /**
     * @param string $string
     * @return bool
     */
    public function solution(string $string): bool
    {
        /**
         * get the length of the input string
         * and check if the it's empty or not then assign
         * the default properly nested status to true, false otherwise.
         * Note: as mentioned in the specs, empty string is properly nested.
         */
        $isProperlyNested = 0 === ($elements = \strlen($string));

        /**
         * Check if the number of element is even (each element has a pair)
         * if not, then automatically its not properly nested
         * as one of the element will not gonna have a pair.
         * No need to process.
         */
        if (0 === ($elements % 2)) {
            $bracketStacks = []; // will hold each element until pair is found.
            $bracketPairs = [    // open and close bracket pairs mapping
                "(" => ")",
                "[" => "]",
                "{" => "}",
                ")" => "(",
                "]" => "[",
                "}" => "{"
            ];

            // iterate through each element
            for ($index = 0; $index < $elements; $index++) {
                // cherry pick a single element from the string
                $currentElement = $string[$index];

                if (empty($bracketStacks)) {
                    /**
                     * Check if the stack of brackets is empty then
                     * add the first element and set the properly nested status to false
                     */
                    $bracketStacks[] = $currentElement;
                    $isProperlyNested = false;
                } else {
                    /**
                     * If the bracket stack is not empty,
                     * get the last inserted element
                     */
                    $lastInserted = $bracketStacks[\count($bracketStacks) - 1];

                    /**
                     * compare the current cherry picked element matches with the
                     * last inserted element's corresponding pair from the mapping array
                     */
                    if (0 === \strcmp($currentElement, $bracketPairs[$lastInserted])) {
                        /**
                         * If they are the same, then we will remove the last inserted element
                         * as it found it matching pair and will be considered as properly nested
                         */
                        \array_pop($bracketStacks);
                        $isProperlyNested = true;
                    } else {
                        /**
                         * If it didn't match, then continue inserting the current element
                         * to the bracket stack and update the properly nested status to false
                         */
                        $bracketStacks[] = $currentElement;
                        $isProperlyNested = false;
                    }
                }
            }
        }

        /**
         * return the nested status 1 | 0
         * 1 - properly nested, 0 - not properly nested
         */
        return $isProperlyNested;
    }
}
