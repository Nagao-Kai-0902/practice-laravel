<?php

declare(strict_types=1);

namespace practice\No2;

class practice_No2
{
    /*
     * このクラスはあるユーザー情報をもらった時に削除する処理を行うクラスである・
     * 使用している変数の中にマジックナンバーが使用されている箇所があるため、修正する必要があります。
     * 変数名を正しく修正し、commitしてください
     *
     */
    public static function delete(array $abcdefghijk): array
    {
        //ユーザ情報を削除する処理
        //・
        //・
        //削除されたユーザー情報を$resultに格納
        $result = [];
        // 返却値として、$resultを返す
        return $result;
    }
    public static function deleteUserInformation(array $abcdefghijk): array
    {
        //削除されたユーザ情報の配列が帰ってくる
        $deleteUserInformation = self::delete($abcdefghijk);
        return $deleteUserInformation;
    }

}
 