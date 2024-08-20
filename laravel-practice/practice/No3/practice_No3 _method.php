<?php

declare(strict_types=1);

namespace Practice\No3;
class practice_No3_method
{
    public static function filter(array $a): array
    {
        $filtered = array_filter($a, function($item) {
            return mb_strlen($item[0]) >= 5;
        });
        return $filtered;
    }


}
 