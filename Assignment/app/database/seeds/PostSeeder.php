<?php
class PostSeeder extends Seeder {
    public function run() {
        Eloquent::unguard();
        
        //Posts by Bob
        $post = new Post;
        $post->title = 'Bob\'s Post 1';
        $post->icon = 'https://upload.wikimedia.org/wikipedia/en/2/2a/Griffith_University_logo.png';
        $post->message = 'Bob\'s public post ';
        $post->privacy = 'Public';
        $post->user_id = 1;
        $user = User::find(1);
        $post->user()->associate($user);
        $post->save();
        
        $post = new Post;
        $post->title = 'Bob\'s Post 2';
        $post->icon = 'https://pbs.twimg.com/profile_images/378800000003051007/01e9f11c2c487fe75f5ae6e1fd3e1d33_400x400.jpeg';
        $post->message = 'Bob\'s friends post';
        $post->privacy = 'Friends';
        $post->user_id = 1;
        $user = User::find(1);
        $post->user()->associate($user);
        $post->save();
        
        $post = new Post;
        $post->title = 'Bob\'s Post 3';
        $post->icon = 'https://upload.wikimedia.org/wikipedia/commons/d/d9/Big_Bear_Valley,_California.jpg';
        $post->message = 'Bob\'s private post';
        $post->privacy = 'Private';
        $post->user_id = 1;
        $user = User::find(1);
        $post->user()->associate($user);
        $post->save();
        
        //Posts by John
        $post = new Post;
        $post->title = 'John\'s Post 1';
        $post->icon = 'https://upload.wikimedia.org/wikipedia/en/2/2a/Griffith_University_logo.png';
        $post->message = 'John\'s public post ';
        $post->privacy = 'Public';
        $post->user_id = 2;
        $user = User::find(2);
        $post->user()->associate($user);
        $post->save();
        
        $post = new Post;
        $post->title = 'John\'s Post 2';
        $post->icon = 'https://pbs.twimg.com/profile_images/378800000003051007/01e9f11c2c487fe75f5ae6e1fd3e1d33_400x400.jpeg';
        $post->message = 'Bob\'s friends post';
        $post->privacy = 'Friends';
        $post->user_id = 2;
        $user = User::find(2);
        $post->user()->associate($user);
        $post->save();
        
        $post = new Post;
        $post->title = 'John\'s Post 3';
        $post->icon = 'https://upload.wikimedia.org/wikipedia/commons/d/d9/Big_Bear_Valley,_California.jpg';
        $post->message = 'John\'s private post';
        $post->privacy = 'Private';
        $post->user_id = 2;
        $user = User::find(2);
        $post->user()->associate($user);
        $post->save();
        
        $post = new Post;
        $post->title = 'John\'s Post 4';
        $post->icon = 'https://upload.wikimedia.org/wikipedia/en/2/2a/Griffith_University_logo.png';
        $post->message = 'John\'s public post ';
        $post->privacy = 'Public';
        $post->user_id = 2;
        $user = User::find(2);
        $post->user()->associate($user);
        $post->save();
        
        $post = new Post;
        $post->title = 'John\'s Post 5';
        $post->icon = 'https://pbs.twimg.com/profile_images/378800000003051007/01e9f11c2c487fe75f5ae6e1fd3e1d33_400x400.jpeg';
        $post->message = 'John\'s friends post';
        $post->privacy = 'Friends';
        $post->user_id = 2;
        $user = User::find(2);
        $post->user()->associate($user);
        $post->save();
        
        $post = new Post;
        $post->title = 'John\'s Post 6';
        $post->icon = 'https://upload.wikimedia.org/wikipedia/commons/d/d9/Big_Bear_Valley,_California.jpg';
        $post->message = 'John\'s private post';
        $post->privacy = 'Private';
        $post->user_id = 2;
        $user = User::find(2);
        $post->user()->associate($user);
        $post->save();
        
        $post = new Post;
        $post->title = 'John\'s Post 7';
        $post->icon = 'https://upload.wikimedia.org/wikipedia/en/2/2a/Griffith_University_logo.png';
        $post->message = 'John\'s public post ';
        $post->privacy = 'Public';
        $post->user_id = 2;
        $user = User::find(2);
        $post->user()->associate($user);
        $post->save();
        
        $post = new Post;
        $post->title = 'John\'s Post 8';
        $post->icon = 'https://pbs.twimg.com/profile_images/378800000003051007/01e9f11c2c487fe75f5ae6e1fd3e1d33_400x400.jpeg';
        $post->message = 'John\'s friends post';
        $post->privacy = 'Friends';
        $post->user_id = 2;
        $user = User::find(2);
        $post->user()->associate($user);
        $post->save();
        
        $post = new Post;
        $post->title = 'John\'s Post 9';
        $post->icon = 'https://upload.wikimedia.org/wikipedia/commons/d/d9/Big_Bear_Valley,_California.jpg';
        $post->message = 'John\'s private post';
        $post->privacy = 'Private';
        $post->user_id = 2;
        $user = User::find(2);
        $post->user()->associate($user);
        $post->save();
        
        $post = new Post;
        $post->title = 'John\'s Post 10';
        $post->icon = 'https://upload.wikimedia.org/wikipedia/en/2/2a/Griffith_University_logo.png';
        $post->message = 'John\'s public post ';
        $post->privacy = 'Public';
        $post->user_id = 2;
        $user = User::find(2);
        $post->user()->associate($user);
        $post->save();
    }
}
