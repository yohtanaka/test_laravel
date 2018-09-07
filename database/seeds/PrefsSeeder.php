<?php

use Illuminate\Database\Seeder;

class PrefsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prefs = [
            ['code' => 1,  'name' => '北海道', 'name_kana' => 'ホッカイドウ'],
            ['code' => 2,  'name' => '青森県', 'name_kana' => 'アオモリケン'],
            ['code' => 3,  'name' => '岩手県', 'name_kana' => 'イワテケン'],
            ['code' => 4,  'name' => '宮城県', 'name_kana' => 'ミヤギケン'],
            ['code' => 5,  'name' => '秋田県', 'name_kana' => 'アキタケン'],
            ['code' => 6,  'name' => '山形県', 'name_kana' => 'ヤマガタケン'],
            ['code' => 7,  'name' => '福島県', 'name_kana' => 'フクシマケン'],
            ['code' => 8,  'name' => '茨城県', 'name_kana' => 'イバラキケン'],
            ['code' => 9,  'name' => '栃木県', 'name_kana' => 'トチギケン'],
            ['code' => 10, 'name' => '群馬県', 'name_kana' => 'グンマケン'],
            ['code' => 11, 'name' => '埼玉県', 'name_kana' => 'サイタマケン'],
            ['code' => 12, 'name' => '千葉県', 'name_kana' => 'チバケン'],
            ['code' => 13, 'name' => '東京都', 'name_kana' => 'トウキョウト'],
            ['code' => 14, 'name' => '神奈川県', 'name_kana' => 'カナガワケン'],
            ['code' => 15, 'name' => '新潟県', 'name_kana' => 'ニイガタケン'],
            ['code' => 16, 'name' => '富山県', 'name_kana' => 'トヤマケン'],
            ['code' => 17, 'name' => '石川県', 'name_kana' => 'イシカワケン'],
            ['code' => 18, 'name' => '福井県', 'name_kana' => 'フクイケン'],
            ['code' => 19, 'name' => '山梨県', 'name_kana' => 'ヤマナシケン'],
            ['code' => 20, 'name' => '長野県', 'name_kana' => 'ナガノケン'],
            ['code' => 21, 'name' => '岐阜県', 'name_kana' => 'ギフケン'],
            ['code' => 22, 'name' => '静岡県', 'name_kana' => 'シズオカケン'],
            ['code' => 23, 'name' => '愛知県', 'name_kana' => 'アイチケン'],
            ['code' => 24, 'name' => '三重県', 'name_kana' => 'ミエケン'],
            ['code' => 25, 'name' => '滋賀県', 'name_kana' => 'シガケン'],
            ['code' => 26, 'name' => '京都府', 'name_kana' => 'キョウトフ'],
            ['code' => 27, 'name' => '大阪府', 'name_kana' => 'オオサカフ'],
            ['code' => 28, 'name' => '兵庫県', 'name_kana' => 'ヒョウゴケン'],
            ['code' => 29, 'name' => '奈良県', 'name_kana' => 'ナラケン'],
            ['code' => 30, 'name' => '和歌山県', 'name_kana' => 'ワカヤマケン'],
            ['code' => 31, 'name' => '鳥取県', 'name_kana' => 'トットリケン'],
            ['code' => 32, 'name' => '島根県', 'name_kana' => 'シマネケン'],
            ['code' => 33, 'name' => '岡山県', 'name_kana' => 'オカヤマケン'],
            ['code' => 34, 'name' => '広島県', 'name_kana' => 'ヒロシマケン'],
            ['code' => 35, 'name' => '山口県', 'name_kana' => 'ヤマグチケン'],
            ['code' => 36, 'name' => '徳島県', 'name_kana' => 'トクシマケン'],
            ['code' => 37, 'name' => '香川県', 'name_kana' => 'カガワケン'],
            ['code' => 38, 'name' => '愛媛県', 'name_kana' => 'エヒメケン'],
            ['code' => 39, 'name' => '高知県', 'name_kana' => 'コウチケン'],
            ['code' => 40, 'name' => '福岡県', 'name_kana' => 'フクオカケン'],
            ['code' => 41, 'name' => '佐賀県', 'name_kana' => 'サガケン'],
            ['code' => 42, 'name' => '長崎県', 'name_kana' => 'ナガサキケン'],
            ['code' => 43, 'name' => '熊本県', 'name_kana' => 'クマモトケン'],
            ['code' => 44, 'name' => '大分県', 'name_kana' => 'オオイタケン'],
            ['code' => 45, 'name' => '宮崎県', 'name_kana' => 'ミヤザキケン'],
            ['code' => 46, 'name' => '鹿児島県', 'name_kana' => 'カゴシマケン'],
            ['code' => 47, 'name' => '沖縄県', 'name_kana' => 'オキナワケン'],
        ];
        DB::table('prefs')->insert($prefs);
    }
}