<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $product = new \App\Product([
                'imagePath' => 'http://vignette3.wikia.nocookie.net/harrypotter/images/9/99/Normal_DVDbluray_HP7.jpg',
                'title' => 'Harry Potter',
                'description' => 'Super Cool at least as a child.',
                'price' => 10
            ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://actofrage.com/wp-content/uploads/2013/07/harry-potter-and-the-prisoner-of-azkaban-movie-poster.jpg',
            'title' => 'Harry Potter 02',
            'description' => 'Potter 02 Super Cool at least as a child.',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://cdn.movieweb.com/img.teasers.posters/FIs3ZdMwCtOVww_374_c.jpg',
            'title' => 'Suicide Squad',
            'description' => 'Very interesting movie about Super Cool at least as a child.',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://pbs.twimg.com/media/Cf5_JEYUUAAFsEY.jpg',
            'title' => '1920 London',
            'description' => '1920 London is Super Cool at least as a child.',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://onairpk.com/wp-content/gallery/movies-2016/1.jpg',
            'title' => 'Popeye',
            'description' => 'Super Cool at least as a child of Popeye.',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://cdn.movieweb.com/img.teasers.posters/FIooCxsu27f7qx_377_c.jpg',
            'title' => 'The Legend of Tarzan',
            'description' => 'Super Cool at least as a child also about tarzan.',
            'price' => 10
        ]);
        $product->save();



    }
}
