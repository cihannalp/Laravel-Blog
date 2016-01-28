<?php

use Illuminate\Database\Seeder;
use App\Article;
class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title'   => 'Lorem Ipsum',
            'body' 	  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus cursus diam nec felis dictum semper. Aliquam ac blandit felis, quis vestibulum augue. Mauris vulputate auctor egestas. Fusce molestie sed tortor at vestibulum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam auctor dolor quis mattis bibendum. Nulla a ultricies mauris, dictum viverra metus. Nunc scelerisque nunc quis arcu hendrerit, hendrerit viverra nibh dapibus.Ut non malesuada ligula, id facilisis dolor. Etiam mollis neque sed iaculis posuere. Phasellus et orci a sapien sodales pretium. Aenean id dui neque. Curabitur accumsan velit ipsum. Sed vitae malesuada justo. Praesent in cursus mi.',
            'user_id' => '1',
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now()
            ]);
    }
}
