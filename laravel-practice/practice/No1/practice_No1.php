<?php

declare(strict_types=1);

namespace practice\No1;
class practice_No1
{

    /*
     * このクラスでは、配列でもらった情報を出力するというメソッドが2つ存在する
     * 出力される情報は2つのメソッドで変わらないが、何が違うのか？
     * コードの可読性という視点で考えてみてください
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

    public static function userInformation(): void
    {
        print_r(['Alice', 'pass1234']);
        print_r(['Bob', 'securepwd']);
        print_r(['David', 'pass9876']);
        print_r(['Eve', 'qwerty123']);
        print_r(['Frank', 'abc123xyz']);
        print_r(['Grace', 'strongpass']);
        print_r(['Hank', 'letmein123']);
        print_r(['Ivy', 'secretcode']);
        print_r(['Jack', 'password1']);

    }
    public static function userInformation_foreach(): void
    {
        foreach (self::user as $user) {
            print_r([$user[0], $user[1]]);
        }
    }

}
 