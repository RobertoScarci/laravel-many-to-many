<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $typeIds = Type::all()->pluck('id');

        $projects = array(
            array(
                'author' => 'Roberto Scarci',
                'type_id' => rand(1, count($typeIds) - 2 ),
                'title' => 'Boolzapp',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, veniam consequuntur assumenda nulla, exercitationem magnam nihil porro laboriosam minus, placeat incidunt dolor sunt! Quos iste fugit, dolorem illo aperiam ipsam?
                Veritatis quaerat consequatur inventore ab amet debitis modi error autem, officia voluptate quas excepturi ducimus eius nulla labore molestiae nam totam temporibus quos obcaecati! Dolores quam ipsa quaerat error inventore!
                Minima animi praesentium odio reprehenderit esse sed quae optio alias architecto nostrum. Possimus quis unde sed nulla quas, ad totam ab animi neque doloremque nesciunt optio magnam illum molestiae consequatur?
                Esse modi laborum fuga adipisci. Explicabo dicta repudiandae aut aperiam eligendi, soluta quod. Minima recusandae at modi vitae. Saepe doloremque sequi quos, molestiae consequatur voluptas veritatis nisi officiis consectetur obcaecati.',
                'post_image' => 'https://screenshots.codesandbox.io/x6xlrv/2.png',
                'date' => '2023-07-12'
            ),
            array(
                'author' => 'Roberto Scarci',
                'type_id' => rand(1, count($typeIds) - 2 ),
                'title' => 'Boolzapp',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, veniam consequuntur assumenda nulla, exercitationem magnam nihil porro laboriosam minus, placeat incidunt dolor sunt! Quos iste fugit, dolorem illo aperiam ipsam?
                Veritatis quaerat consequatur inventore ab amet debitis modi error autem, officia voluptate quas excepturi ducimus eius nulla labore molestiae nam totam temporibus quos obcaecati! Dolores quam ipsa quaerat error inventore!
                Minima animi praesentium odio reprehenderit esse sed quae optio alias architecto nostrum. Possimus quis unde sed nulla quas, ad totam ab animi neque doloremque nesciunt optio magnam illum molestiae consequatur?
                Esse modi laborum fuga adipisci. Explicabo dicta repudiandae aut aperiam eligendi, soluta quod. Minima recusandae at modi vitae. Saepe doloremque sequi quos, molestiae consequatur voluptas veritatis nisi officiis consectetur obcaecati.',
                'post_image' => 'https://screenshots.codesandbox.io/x6xlrv/2.png',
                'date' => '2023-07-12'
            ),
            array(
                'author' => 'Roberto Scarci',
                'type_id' => rand(1, count($typeIds) - 2 ),
                'title' => 'Boolzapp',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, veniam consequuntur assumenda nulla, exercitationem magnam nihil porro laboriosam minus, placeat incidunt dolor sunt! Quos iste fugit, dolorem illo aperiam ipsam?
                Veritatis quaerat consequatur inventore ab amet debitis modi error autem, officia voluptate quas excepturi ducimus eius nulla labore molestiae nam totam temporibus quos obcaecati! Dolores quam ipsa quaerat error inventore!
                Minima animi praesentium odio reprehenderit esse sed quae optio alias architecto nostrum. Possimus quis unde sed nulla quas, ad totam ab animi neque doloremque nesciunt optio magnam illum molestiae consequatur?
                Esse modi laborum fuga adipisci. Explicabo dicta repudiandae aut aperiam eligendi, soluta quod. Minima recusandae at modi vitae. Saepe doloremque sequi quos, molestiae consequatur voluptas veritatis nisi officiis consectetur obcaecati.',
                'post_image' => 'https://screenshots.codesandbox.io/x6xlrv/2.png',
                'date' => '2023-07-12'
            ),
            array(
                'author' => 'Roberto Scarci',
                'type_id' => rand(1, count($typeIds) - 2 ),
                'title' => 'Boolzapp',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, veniam consequuntur assumenda nulla, exercitationem magnam nihil porro laboriosam minus, placeat incidunt dolor sunt! Quos iste fugit, dolorem illo aperiam ipsam?
                Veritatis quaerat consequatur inventore ab amet debitis modi error autem, officia voluptate quas excepturi ducimus eius nulla labore molestiae nam totam temporibus quos obcaecati! Dolores quam ipsa quaerat error inventore!
                Minima animi praesentium odio reprehenderit esse sed quae optio alias architecto nostrum. Possimus quis unde sed nulla quas, ad totam ab animi neque doloremque nesciunt optio magnam illum molestiae consequatur?
                Esse modi laborum fuga adipisci. Explicabo dicta repudiandae aut aperiam eligendi, soluta quod. Minima recusandae at modi vitae. Saepe doloremque sequi quos, molestiae consequatur voluptas veritatis nisi officiis consectetur obcaecati.',
                'post_image' => 'https://screenshots.codesandbox.io/x6xlrv/2.png',
                'date' => '2023-07-12'
            ),
            array(
                'author' => 'Roberto Scarci',
                'type_id' => rand(1, count($typeIds) - 2 ),
                'title' => 'Boolzapp',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, veniam consequuntur assumenda nulla, exercitationem magnam nihil porro laboriosam minus, placeat incidunt dolor sunt! Quos iste fugit, dolorem illo aperiam ipsam?
                Veritatis quaerat consequatur inventore ab amet debitis modi error autem, officia voluptate quas excepturi ducimus eius nulla labore molestiae nam totam temporibus quos obcaecati! Dolores quam ipsa quaerat error inventore!
                Minima animi praesentium odio reprehenderit esse sed quae optio alias architecto nostrum. Possimus quis unde sed nulla quas, ad totam ab animi neque doloremque nesciunt optio magnam illum molestiae consequatur?
                Esse modi laborum fuga adipisci. Explicabo dicta repudiandae aut aperiam eligendi, soluta quod. Minima recusandae at modi vitae. Saepe doloremque sequi quos, molestiae consequatur voluptas veritatis nisi officiis consectetur obcaecati.',
                'post_image' => 'https://screenshots.codesandbox.io/x6xlrv/2.png',
                'date' => '2023-07-12'
            ),
            array(
                'author' => 'Roberto Scarci',
                'type_id' => rand(1, count($typeIds) - 2 ),
                'title' => 'Boolzapp',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, veniam consequuntur assumenda nulla, exercitationem magnam nihil porro laboriosam minus, placeat incidunt dolor sunt! Quos iste fugit, dolorem illo aperiam ipsam?
                Veritatis quaerat consequatur inventore ab amet debitis modi error autem, officia voluptate quas excepturi ducimus eius nulla labore molestiae nam totam temporibus quos obcaecati! Dolores quam ipsa quaerat error inventore!
                Minima animi praesentium odio reprehenderit esse sed quae optio alias architecto nostrum. Possimus quis unde sed nulla quas, ad totam ab animi neque doloremque nesciunt optio magnam illum molestiae consequatur?
                Esse modi laborum fuga adipisci. Explicabo dicta repudiandae aut aperiam eligendi, soluta quod. Minima recusandae at modi vitae. Saepe doloremque sequi quos, molestiae consequatur voluptas veritatis nisi officiis consectetur obcaecati.',
                'post_image' => 'https://screenshots.codesandbox.io/x6xlrv/2.png',
                'date' => '2023-07-12'
            ),
        );

            foreach ($projects as $project) {
                Project::create($project);
            }
    }
}


