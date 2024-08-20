<?php

declare(strict_types=1);

namespace Practice\No3;
class practice_No3
{
    /*
     * このクラスはあるユーザー情報の中から、一部条件に当てはまるもののみ抽出して値を返す処理がある。
     * 使用されているメソッドの中に、誤解が生まれるようなメソッドがないかという観点から、リファクタリングをしてみましょう
     * 変数名・メソッド名を正しく修正し、commitしてください
     *
     */
    public const user = [
        ['Alice', 'pass1234'],
        ['Bob', 'securepwd'],
        ['Charlie', 'mypassword'],
        ['David', 'pass9876'],
        ['Eve', 'qwerty123'],
        ['Frank', 'abc123xyz'],
        ['Grace', 'strongpass'],
        ['Hank', 'letmein123'],
        ['Ivy', 'secretcode'],
        ['Jack', 'password1'],
    ];
    public static function userInformation(): array
    {
        //
        $result = practice_No3_method::filter(self::user);
        // 返却値として、格納した変数を返す
        return $result;
    }


}
 