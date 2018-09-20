<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cases')->insert([
            'thumb_img'=>str_random('20'),
            'title' => str_random('20').'__title',
            'brief' => str_random('20') . '__brief',
            'brief_more' => str_random('20') . '__brief_more',
            'content' => str_random('20') . '__content_more',
            'visit_count' => rand(100,300),
            'is_show_index' => 1,
        ]);      
    }
}
