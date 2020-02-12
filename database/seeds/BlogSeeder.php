<?php

use App\Model\Blog;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                "userId" => 1,
                "imgSrc" => "img/blog/single_blog_1.png",
                "slug" => str_slug('Google inks pact for new 35-storey office', '-'),
                "title" => "Google inks pact for new 35-storey office",
                "desc" => "That dominion stars lights dominion divide years for fourth have don't stars is that
                he earth it first without heaven in place seed it second morning saying.",
                "categoryId" => 1,
            ],
            [
                "userId" => 1,
                "imgSrc" => "img/blog/single_blog_2.png",
                "slug" => str_slug('Google inks pact for new 35-storey office', '-'),
                "title" => "Google inks pact for new 35-storey office",
                "desc" => "That dominion stars lights dominion divide years for fourth have don't stars is that
                he earth it first without heaven in place seed it second morning saying.",
                "categoryId" => 1,
            ],
            [
                "userId" => 1,
                "imgSrc" => "img/blog/single_blog_3.png",
                "slug" => str_slug('Google inks pact for new 35-storey office', '-'),
                "title" => "Google inks pact for new 35-storey office",
                "desc" => "That dominion stars lights dominion divide years for fourth have don't stars is that
                he earth it first without heaven in place seed it second morning saying.",
                "categoryId" => 1,
            ],
            [
                "userId" => 1,
                "imgSrc" => "img/blog/single_blog_4.png",
                "slug" => str_slug('Google inks pact for new 35-storey office', '-'),
                "title" => "Google inks pact for new 35-storey office",
                "desc" => "That dominion stars lights dominion divide years for fourth have don't stars is that
                he earth it first without heaven in place seed it second morning saying.",
                "categoryId" => 1,
            ],
            [
                "userId" => 1,
                "imgSrc" => "img/blog/single_blog_5.png",
                "slug" => str_slug('Google inks pact for new 35-storey office', '-'),
                "title" => "Google inks pact for new 35-storey office",
                "desc" => "That dominion stars lights dominion divide years for fourth have don't stars is that
                he earth it first without heaven in place seed it second morning saying.",
                "categoryId" => 1,
            ],
            [
                "userId" => 1,
                "imgSrc" => "img/blog/single_blog_1.png",
                "slug" => str_slug('Google inks pact for new 35-storey office', '-'),
                "title" => "Google inks pact for new 35-storey office",
                "desc" => "That dominion stars lights dominion divide years for fourth have don't stars is that
                he earth it first without heaven in place seed it second morning saying.",
                "categoryId" => 1,
            ],
            [
                "userId" => 1,
                "imgSrc" => "img/blog/single_blog_2.png",
                "slug" => str_slug('Google inks pact for new 35-storey office', '-'),
                "title" => "Google inks pact for new 35-storey office",
                "desc" => "That dominion stars lights dominion divide years for fourth have don't stars is that
                he earth it first without heaven in place seed it second morning saying.",
                "categoryId" => 1,
            ],
            [
                "userId" => 1,
                "imgSrc" => "img/blog/single_blog_3.png",
                "slug" => str_slug('Google inks pact for new 35-storey office', '-'),
                "title" => "Google inks pact for new 35-storey office",
                "desc" => "That dominion stars lights dominion divide years for fourth have don't stars is that
                he earth it first without heaven in place seed it second morning saying.",
                "categoryId" => 1,
            ],
            [
                "userId" => 1,
                "imgSrc" => "img/blog/single_blog_4.png",
                "slug" => str_slug('Google inks pact for new 35-storey office', '-'),
                "title" => "Google inks pact for new 35-storey office",
                "desc" => "That dominion stars lights dominion divide years for fourth have don't stars is that
                he earth it first without heaven in place seed it second morning saying.",
                "categoryId" => 1,
            ],
            [
                "userId" => 1,
                "imgSrc" => "img/blog/single_blog_5.png",
                "slug" => str_slug('Google inks pact for new 35-storey office', '-'),
                "title" => "Google inks pact for new 35-storey office",
                "desc" => "That dominion stars lights dominion divide years for fourth have don't stars is that
                he earth it first without heaven in place seed it second morning saying.",
                "categoryId" => 1,
            ],
        ];

        foreach ($data as $key => $value) {
            Blog::create($value);
        }
    }
}
