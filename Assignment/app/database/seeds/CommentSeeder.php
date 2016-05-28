<?php
class CommentSeeder extends Seeder {
    public function run() {
        Eloquent::unguard();
        
        //Comments on John's post
        $comment = new Comment;
        $comment->comment = 'John\'s Comment 1';
        $comment->post_id = 4;
        $comment->user_id = 2;
        $post = Post::find(4);
        $comment->post()->associate($post);
        $comment->save();
        
        $comment = new Comment;
        $comment->comment = 'John\'s Comment 2';
        $comment->post_id = 4;
        $comment->user_id = 2;
        $post = Post::find(4);
        $comment->post()->associate($post);
        $comment->save();
        
        $comment = new Comment;
        $comment->comment = 'John\'s Comment 3';
        $comment->post_id = 4;
        $comment->user_id = 2;
        $post = Post::find(4);
        $comment->post()->associate($post);
        $comment->save();
        
        $comment = new Comment;
        $comment->comment = 'John\'s Comment 4';
        $post = Post::find(4);
        $comment->post_id = 4;
        $comment->user_id = 2;
        $comment->post()->associate($post);
        $comment->save();
        
        $comment = new Comment;
        $comment->comment = 'John\'s Comment 5';
        $comment->post_id = 4;
        $comment->user_id = 2;
        $post = Post::find(4);
        $comment->post()->associate($post);
        $comment->save();
        
        $comment = new Comment;
        $comment->comment = 'John\'s Comment 6';
        $comment->post_id = 4;
        $comment->user_id = 2;
        $post = Post::find(4);
        $comment->post()->associate($post);
        $comment->save();
        
        $comment = new Comment;
        $comment->comment = 'John\'s Comment 7';
        $comment->post_id = 4;
        $comment->user_id = 2;
        $post = Post::find(4);
        $comment->post()->associate($post);
        $comment->save();
        
        $comment = new Comment;
        $comment->comment = 'John\'s Comment 8';
        $comment->post_id = 4;
        $comment->user_id = 2;
        $post = Post::find(4);
        $comment->post()->associate($post);
        $comment->save();
        
        $comment = new Comment;
        $comment->comment = 'John\'s Comment 9';
        $comment->post_id = 4;
        $comment->user_id = 2;
        $post = Post::find(4);
        $comment->post()->associate($post);
        $comment->save();
        
        $comment = new Comment;
        $comment->comment = 'John\'s Comment 10';
        $comment->post_id = 4;
        $comment->user_id = 2;
        $post = Post::find(4);
        $comment->post()->associate($post);
        $comment->save();
    }
}
