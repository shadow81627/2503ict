<?php
class PostSeeder extends Seeder {
    public function run() {
        Eloquent::unguard();
        
        $post = new Post;
        $post->title = 'Bob\'s Post 1';
        $post->icon = 'https://upload.wikimedia.org/wikipedia/en/2/2a/Griffith_University_logo.png';
        $post->message = 'Bob\'s public post ';
        $post->post_name = 'Bob';
        $post->privacy = 'Public';
        $post->save();
        
        $post = new Post;
        $post->title = 'Bob\'s Post 2';
        $post->icon = 'https://pbs.twimg.com/profile_images/378800000003051007/01e9f11c2c487fe75f5ae6e1fd3e1d33_400x400.jpeg';
        $post->message = 'Bob\'s friends post';
        $post->post_name = 'Bob';
        $post->privacy = 'Friends';
        $post->save();
        
        $post = new Post;
        $post->title = 'Bob\'s Post 3';
        $post->icon = 'https://upload.wikimedia.org/wikipedia/commons/d/d9/Big_Bear_Valley,_California.jpg';
        $post->message = 'Bob\'s private post';
        $post->post_name = 'Bob';
        $post->privacy = 'Private';
        $post->save();
    }
}
