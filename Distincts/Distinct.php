<?php

namespace Distincts;

/**
 * Class Distinct
 * @package Distinct
 */
class Distinct
{
    /**
     * @param $A
     * @return int
     */
    public function solution($A): int
    {
        $list = [];
        foreach ($A as $item) {
            if (!in_array($item, $list, true)) {
                $list[] = $item;
            }
        }

        return count($list);
    }
}