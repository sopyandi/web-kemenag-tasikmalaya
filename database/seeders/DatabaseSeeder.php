<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // User::create([
        //     'name'=>'Rian Sopyandi',
        //     'email'=>'sopyandirian12@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);
        // User::create([
        //     'name'=>'Fitria',
        //     'email'=>'fitria12@gmail.com',
        //     'password'=>bcrypt('54321')
        // ]);

        // Post::create([
        //     'title'=>'Judul Berita Pertama',
        //     'slug'=>'judul-berita-pertama',
        //     'exerp'=>'  Lorem ipsum dolor sit amet consectetur adipisicing
        //       elit. Sunt maxime nulla officia molestias commodi
        //       nobis, eaque nisi, illo provident cupiditate amet
        //       reiciendis velit a laborum et ad ab repudiandae 
        //       fugiat error cum voluptatibus possimus pariatur 
        //       eligendi. Facilis voluptate dicta illo quidem 
        //       veniam, architecto perspiciatis. Ipsa eveniet pa',
        //     'body'=>' Lorem ipsum dolor sit amet consectetur adipisicing
        //     elit. Sunt maxime nulla officia molestias commodi
        //      nobis, eaque nisi, illo provident cupiditate amet
        //       reiciendis velit a laborum et ad ab repudiandae 
        //       fugiat error cum voluptatibus possimus pariatur 
        //       eligendi. Facilis voluptate dicta illo quidem 
        //       veniam, architecto perspiciatis. Ipsa eveniet pariatur 
        //       soluta tempore non velit nihil magnam unde? Doloremque
        //       , quaerat magni harum quam, aut totam sit perferendis
        //        aliquid quasi eveniet pariatur debitis distinctio
        //        . Hic necessitatibus, dolor est exercitationem aut
        //        voluptatum ipsam. Id inventore fuga error illo totam e
        //        um ex rerum aut aspernatur, voluptatem eveniet velit
        //         nobis numquam quia iusto alias eligendi consectetur 
        //         molestiae placeat?',
        //     'category_id'=>1,
        //     'user_id'=>1

        // ]);
        // Post::create([
        //     'title'=>'Judul Berita kedua',
        //     'slug'=>'judul-berita-kedua',
        //     'exerp'=>'  Lorem ipsum dolor sit amet consectetur adipisicing
        //       elit. Sunt maxime nulla officia molestias commodi
        //       nobis, eaque nisi, illo provident cupiditate amet
        //       reiciendis velit a laborum et ad ab repudiandae 
        //       fugiat error cum voluptatibus possimus pariatur 
        //       eligendi. Facilis voluptate dicta illo quidem 
        //       veniam, architecto perspiciatis. Ipsa eveniet pa',
        //     'body'=>' Lorem ipsum dolor sit amet consectetur adipisicing
        //     elit. Sunt maxime nulla officia molestias commodi
        //      nobis, eaque nisi, illo provident cupiditate amet
        //       reiciendis velit a laborum et ad ab repudiandae 
        //       fugiat error cum voluptatibus possimus pariatur 
        //       eligendi. Facilis voluptate dicta illo quidem 
        //       veniam, architecto perspiciatis. Ipsa eveniet pariatur 
        //       soluta tempore non velit nihil magnam unde? Doloremque
        //       , quaerat magni harum quam, aut totam sit perferendis
        //        aliquid quasi eveniet pariatur debitis distinctio
        //        . Hic necessitatibus, dolor est exercitationem aut
        //        voluptatum ipsam. Id inventore fuga error illo totam e
        //        um ex rerum aut aspernatur, voluptatem eveniet velit
        //         nobis numquam quia iusto alias eligendi consectetur 
        //         molestiae placeat?',
        //     'category_id'=>1,
        //     'user_id'=>1

        // ]);
        // Post::create([
        //     'title'=>'Judul Berita ketiga',
        //     'slug'=>'judul-berita-ketiga',
        //     'exerp'=>'  Lorem ipsum dolor sit amet consectetur adipisicing
        //       elit. Sunt maxime nulla officia molestias commodi
        //       nobis, eaque nisi, illo provident cupiditate amet
        //       reiciendis velit a laborum et ad ab repudiandae 
        //       fugiat error cum voluptatibus possimus pariatur 
        //       eligendi. Facilis voluptate dicta illo quidem 
        //       veniam, architecto perspiciatis. Ipsa eveniet pa',
        //     'body'=>' Lorem ipsum dolor sit amet consectetur adipisicing
        //     elit. Sunt maxime nulla officia molestias commodi
        //      nobis, eaque nisi, illo provident cupiditate amet
        //       reiciendis velit a laborum et ad ab repudiandae 
        //       fugiat error cum voluptatibus possimus pariatur 
        //       eligendi. Facilis voluptate dicta illo quidem 
        //       veniam, architecto perspiciatis. Ipsa eveniet pariatur 
        //       soluta tempore non velit nihil magnam unde? Doloremque
        //       , quaerat magni harum quam, aut totam sit perferendis
        //        aliquid quasi eveniet pariatur debitis distinctio
        //        . Hic necessitatibus, dolor est exercitationem aut
        //        voluptatum ipsam. Id inventore fuga error illo totam e
        //        um ex rerum aut aspernatur, voluptatem eveniet velit
        //         nobis numquam quia iusto alias eligendi consectetur 
        //         molestiae placeat?',
        //     'category_id'=>2,
        //     'user_id'=>2

        // ]);

        User::factory(5)->create();


        Category::create([
            'img' => 'islam.jpg',
            'nama' => 'Agama Islam',
            'slug' => 'agama-islam'
        ]);
        Category::create([
            'img' => 'kristen.jpg',
            'nama' => 'Agama Kristen',
            'slug' => 'agama-kristen'
        ]);
        Category::create([
            'img' => 'hindu.jpg',
            'nama' => 'Agama Hindu',
            'slug' => 'agama-hindu'
        ]);
        Category::create([
            'img' => 'konghucu.jpg',
            'nama' => 'Agama Kongucu',
            'slug' => 'agama-kongucu'
        ]);
        Category::create([
            'img' => 'katolik.jpg',
            'nama' => 'Agama Katholik',
            'slug' => 'agama-katolik'
        ]);
        Post::factory(10)->create();
    }
}
