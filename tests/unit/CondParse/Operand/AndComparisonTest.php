<?php


namespace CondParse\Operand;


use CondParse\TokenMap;

class AndComparisonTest extends AbstractComparisonTest
{
    public function andComparisonProvider()
    {
        return [
            [true, true, true],
            [true, false, false],
            [false, true, false],
            [false, false, false],
        ];
    }

    /** @return AbstractLeftRightOperator */
    public function getComparator()
    {
        return new AndOperator(TokenMap::TOKEN_AND, '&&');
    }
}
