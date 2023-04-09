<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            "name" => "Ferlan Ferlani",
            "email" => "ferlanferlani@gmail.com",
            "password" => "111",
            "image" => "client-1.png"
        ]);
        User::create([
            "name" => "Elan",
            "email" => "elan@gmail.com",
            "password" => "222",
            "image" => "client-2.png"
        ]);
        User::create([
            "name" => "Ferlan",
            "email" => "Ferlan@gmail.com",
            "password" => "333",
            "image" => "client-3.png"
        ]);

        Category::create([
            "name" => "Web Programming",
            "slug" => "web-programming"
        ]);
         Category::create([
            "name" => "Web Design",
            "slug" => "web-design"
        ]);
        Category::create([
            "name" => "Personal",
            "slug" => "personal"
        ]);

        Comment::create([
            "name" => "Gilang Andika",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni error expedita accusamus tenetur nemo? Rem cumque quas consequuntur odit amet maxime ",
            "time" => "Selasa, 21 Juni 2021"
        ]);
        Comment::create([
            "name" => "Diki Kurniawan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni error expedita accusamus tenetur nemo? Rem cumque quas consequuntur odit amet maxime ",
            "time" => "Minggu, 9 Juni 2022"
        ]);
        Comment::create([
            "name" => "Alesyha Zahra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni error expedita accusamus tenetur nemo? Rem cumque quas consequuntur odit amet maxime ",
            "time" => "Jum'at, 9 Desember 2022"
        ]);

        Post::create([
            "category_id" => 1,
            "user_id" => 1,
            "comment_id" => 1,
            "title" => "Judul Postingan Pertama",
            "slug" => "judul-postingan-pertama",
            "thumbnail" => "blog-1.jpg",
            "time" => "Rabu, 22 Februari 2023",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni error expedita accusamus tenetur nemo? Rem cumque quas consequuntur odit amet maxime",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni error expedita accusamus tenetur nemo? Rem cumque quas consequuntur odit amet maxime esse adipisci labore sed blanditiis? Molestiae quibusdam est numquam. Doloribus earum, eos ipsam laborum maiores voluptas nisi voluptates tempora recusandae, sequi numquam veritatis laudantium labore dolore. Adipisci sint eligendi provident sed eum commodi molestias saepe amet. Facilis ad nam animi. Voluptate neque cupiditate similique earum, voluptates nostrum ipsam, dignissimos et vel magnam provident! Commodi corrupti iusto magnam, repellat repellendus mollitia suscipit rerum quaerat laborum, nam impedit. Eum adipisci vero, alias repellendus a quae natus quaerat, dolore, quidem rem iusto."

        ]);
        Post::create([
            "category_id" => 2,
            "user_id" => 2,
            "comment_id" => 2,
            "title" => "Judul Postingan Ke Dua",
            "slug" => "judul-postingan-ke-dua",
            "thumbnail" => "blog-2.jpg",
            "time" => "Jum'at, 11 Agustus 2023",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni error expedita accusamus tenetur nemo? Rem cumque quas consequuntur odit amet maxime",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni error expedita accusamus tenetur nemo? Rem cumque quas consequuntur odit amet maxime esse adipisci labore sed blanditiis? Molestiae quibusdam est numquam. Doloribus earum, eos ipsam laborum maiores voluptas nisi voluptates tempora recusandae, sequi numquam veritatis laudantium labore dolore. Adipisci sint eligendi provident sed eum commodi molestias saepe amet. Facilis ad nam animi. Voluptate neque cupiditate similique earum, voluptates nostrum ipsam, dignissimos et vel magnam provident! Commodi corrupti iusto magnam, repellat repellendus mollitia suscipit rerum quaerat laborum, nam impedit. Eum adipisci vero, alias repellendus a quae natus quaerat, dolore, quidem rem iusto."

        ]);
        Post::create([
            "category_id" => 3,
            "user_id" => 3,
            "comment_id" => 3,
            "title" => "Judul Postingan Ke Tiga",
            "slug" => "judul-postingan-ke-tiga",
            "thumbnail" => "blog-3.jpg",
            "time" => "Senin, 22 Juni 2021",
            "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni error expedita accusamus tenetur nemo? Rem cumque quas consequuntur odit amet maxime",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni error expedita accusamus tenetur nemo? Rem cumque quas consequuntur odit amet maxime esse adipisci labore sed blanditiis? Molestiae quibusdam est numquam. Doloribus earum, eos ipsam laborum maiores voluptas nisi voluptates tempora recusandae, sequi numquam veritatis laudantium labore dolore. Adipisci sint eligendi provident sed eum commodi molestias saepe amet. Facilis ad nam animi. Voluptate neque cupiditate similique earum, voluptates nostrum ipsam, dignissimos et vel magnam provident! Commodi corrupti iusto magnam, repellat repellendus mollitia suscipit rerum quaerat laborum, nam impedit. Eum adipisci vero, alias repellendus a quae natus quaerat, dolore, quidem rem iusto."

        ]);


    }
}