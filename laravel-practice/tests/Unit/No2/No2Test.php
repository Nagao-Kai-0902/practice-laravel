<?php

namespace Tests\Unit\No2;

use PHPUnit\Framework\TestCase;
use practice\No2\practice_No2;

class No2Test extends TestCase
{
    /**
     * practice_No2の単体テスト
     *
     */
    public function test_that_true_is_true(): void
    {
        $abcdefghijk = ['userName', 'password'];
        practice_No2::deleteUserInformation($abcdefghijk);
        $this->assertTrue(true);
    }
}
 