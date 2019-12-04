<?php

use Illuminate\Database\Seeder;

class BlogSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->insert(
        [
          'id' => 2,
          'title' => 'Title Blog Two',
          'subject' => 'ahmadhaidaralbaqir@gmail.com'
        ]
      );
    }
}
