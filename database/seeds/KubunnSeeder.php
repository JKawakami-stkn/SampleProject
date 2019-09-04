<?php

use Illuminate\Database\Seeder;

class KubunnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('kubunn')->insert([
        [
          'kubunn_name' => '服',
          'delete' => 1
        ],
        [
          'kubunn_name' => '帽子',
          'delete' => 1
        ],
        [
          'kubunn_name' => '靴',
          'delete' => 1
        ],
        [
          'kubunn_name' => '紙',
          'delete' => 1
        ],
        [
          'kubunn_name' => '勉強道具',
          'delete' => 1
        ],
        [
          'kubunn_name' => 'その他',
          'delete' => 1
        ]

      ]);
    }
}
